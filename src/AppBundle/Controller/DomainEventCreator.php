<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 12/28/17
 * Time: 12:16 PM
 */
namespace AppBundle\Controller;

use AppBundle\DataProvider\GetDateTime;
use AppBundle\Entity\DomainEvents;

class DomainEventCreator
{
    /**
     * @param string $person
     * @param string $eventName
     *
     * @return DomainEvents $domainEvent
     */
    public function whenDataWrite(string $person, string $eventName)
    {
        $domainEvent = new DomainEvents();
        $getDateTimeObj = new GetDateTime();

        $domainEvent->version= $getDateTimeObj->whenOccured();
        $domainEvent->command = $eventName;
        $domainEvent->events = "Write: -> ".$person;

        //$domainEventJson = json_encode($domainEvent);

        return $domainEvent;
    }

    /**
     * @param string $person
     * @param string $eventName
     *
     * @return DomainEvents $domainEvent
     */
    public function whenDataRead(string $person, string $eventName)
    {
        $domainEvent = new DomainEvents();
        $getDateTimeObj = new GetDateTime();

        $domainEvent->version= $getDateTimeObj->whenOccured();
        $domainEvent->command = $eventName;
        $domainEvent->events = "Read: -> ".$person;

        //$domainEventJson = json_encode($domainEvent);

        return $domainEvent;
    }
}