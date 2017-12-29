<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomainEvents
 *
 * @ORM\Table(name="domain_events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DomainEventsRepository")
 */
class DomainEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="events", type="string", length=40)
     */
    public $events;

    /**
     * @var string
     *
     * @ORM\Column(name="command", type="text")
     */
    public $command;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="text")
     */
    public $version;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set events
     *
     * @param string $events
     *
     * @return DomainEvents
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get events
     *
     * @return string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set command
     *
     * @param string $command
     *
     * @return DomainEvents
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return DomainEvents
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}

