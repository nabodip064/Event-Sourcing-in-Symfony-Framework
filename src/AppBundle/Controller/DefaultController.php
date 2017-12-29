<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DomainEvents;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/events", name="eventRef")
     */
    public function eventsAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(DomainEvents::class);
        $command = $repository->createQueryBuilder('e')
            ->select('DISTINCT e.command')
            ->groupBy('e.command')
            ->getQuery()->execute();

        return $this->render('default/events.html.twig', ['commands' => $command]);
    }

    /**
     * @Route("/create", name="createRef")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/add', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/read", name="readRef")
     */
    public function readAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/read', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/delete", name="deleteRef")
     */
    public function deleteAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/delete', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/addUser", name="addUser")
     */
    public function addUserAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/addUser', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/changePassword", name="changePassword")
     */
    public function changePasswordAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/changePassword', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/commandDetails/{command}", name="commandDetails")
     */
    public function eventDetailsAction($command)
    {
        $repository = $this->getDoctrine()->getRepository(DomainEvents::class);
        $employeeObj = $repository->findBy(array('command'=>$command));


        return $this->render('success/allEvents', ['event' => $employeeObj]);
    }
}
