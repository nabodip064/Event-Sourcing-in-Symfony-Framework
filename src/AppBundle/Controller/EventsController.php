<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Controller\commandHandle;
use AppBundle\Entity\UserRegistrationEntity;
use AppBundle\Entity\DomainEvents;


class EventsController extends Controller
{
    /**
     * @Route("/events/addUser", name="addUserEvent")
     */
    public function addUserAction(Request $request)
    {
        $personObj = new UserRegistrationEntity();
        $personObj->name = $request->get('userNameInput');
        $personObj->gender = $request->get('userGenderInput');
        $personObj->userName = $request->get('userUserNameInput');
        $personObj->password = $request->get('userPasswordInput');

        $personJson = json_encode($personObj);
        $eventName = 'DATA_INSERTION';

        $commandHandleObj = new commandHandle();
        $domainEvent = $commandHandleObj->GetWriteEvent($personJson, $eventName);

        $this->StoreEvents($domainEvent);
        $this->CreateData($personObj);

        return $this->render('success/eventSuccess', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/events/changePassword", name="changePasswordEvent")
     */
    public function changePasswordAction(Request $request)
    {
        $id = $request->get('userIdInput');
        $changePass = $request->get('changedPassword');

        $eventName = 'DATA_UPDATE';
        $getPerson = $this->ReadData($id);
        $personJson = json_encode($getPerson);

        $commandHandleObj = new commandHandle();
        $domainEvent = $commandHandleObj->GetWriteEvent($personJson, $eventName);

        $this->StoreEvents($domainEvent);
        $this->UpdateData($id, $changePass);

        return $this->render('success/eventSuccess', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/events/read", name="readEvent")
     */
    public function readAction(Request $request)
    {
        $id = $request->get('userIdInput');

        $eventName = 'READ_DATA';
        $getPerson = $this->ReadData($id);
        $personJson = json_encode($getPerson);

        $commandHandleObj = new commandHandle();
        $domainEvent = $commandHandleObj->GetReadEvent($personJson, $eventName);

        $this->StoreEvents($domainEvent);

        return $this->render('success/eventSuccess', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/events/delete", name="deleteEvent")
     */
    public function deleteAction(Request $request)
    {
        $id = $request->get('userIdInput');

        $eventName = 'DELETE_DATA';
        $getPerson = $this->ReadData($id);
        $personJson = json_encode($getPerson);

        $commandHandleObj = new commandHandle();
        $domainEvent = $commandHandleObj->GetWriteEvent($personJson, $eventName);

        $this->StoreEvents($domainEvent);
        $this->DeleteData($getPerson);

        return $this->render('success/eventSuccess', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @param DomainEvents $queryData
     *
     * @return void
     */
    public function StoreEvents(DomainEvents $queryData)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($queryData);
        $em->flush();
    }

    /**
     * @param UserRegistrationEntity $queryData
     *
     * @return void
     */
    public function CreateData(UserRegistrationEntity $queryData)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($queryData);
        $em->flush();
    }

    /**
     * @param integer $id
     *
     * @return UserRegistrationEntity $person
     */
    public function ReadData(int $id)
    {
        $personRepository = $this->getDoctrine()->getRepository(UserRegistrationEntity::class);
        $person = $personRepository->find($id);
        return $person;
    }

    /**
     * @param int $id
     * @param string $password
     *
     * @return void
     */
    public function UpdateData(int $id, string $password)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(UserRegistrationEntity::class)->find($id);
        $repository->setPassword($password);
        $em->flush();
    }

    /**
     * @param UserRegistrationEntity $person
     *
     * @return void
     */
    public function DeleteData(UserRegistrationEntity $person)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($person);
        $em->flush();
    }
}
