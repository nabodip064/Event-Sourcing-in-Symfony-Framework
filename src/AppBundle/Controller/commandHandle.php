<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 12/28/17
 * Time: 11:15 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\DomainEvents;
use AppBundle\Controller\EventsController;
use Symfony\Component\BrowserKit\Response;

class commandHandle extends Controller
{
    /**
     * @Route("/admin", name="adminn")
     */
    public function DataInsertionAction()
    {
        $obj = new DomainEvents();

        $obj->command = "command1";
        $obj->events = "events1";
        $obj->version = "version1";

        //$this->StoreEvents($obj);
        echo "data inserted";
        die();

        //return $this->redirect();
    }

    /**
     * @param string $jsonData
     * @param string $eventName
     *
     * @return DomainEvents $events
     */
    public function GetWriteEvent(string $jsonData,string $eventName)
    {
        $domainEventCreator = new DomainEventCreator();
        $domainEvent = $domainEventCreator->whenDataWrite($jsonData, $eventName);

        return $domainEvent;
    }

    /**
     * @param string $jsonData
     * @param string $eventName
     *
     * @return DomainEvents $events
     */
    public function GetReadEvent(string $jsonData,string $eventName)
    {
        $domainEventCreator = new DomainEventCreator();
        $domainEvent = $domainEventCreator->whenDataRead($jsonData, $eventName);

        return $domainEvent;
    }
}