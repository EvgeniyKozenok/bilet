<?php

namespace App\Reservator;

/**
 * Class Reservator
 * @package App\Reservator
 */
class Reservator
{
    /**
     * @var
     */
    protected $event;
    /**
     * @var
     */
    protected $ticketId;
    /**
     * @var
     */
    protected $orderId;
    /**
     * @var int
     */
    protected $minNumber = 99;
    /**
     * @var int
     */
    protected $maxNumber = 300;
    /**
     * @var string
     */
    protected $prefix = 'local';

    /**
     * Reservator constructor.
     * @param $eventId
     */
    public function __construct($eventId)
    {
        $this->event = $eventId;
        echo $this->getMessagePrefix() . "creating object for event #$this->event\n";
    }

    /**
     *  Reserve ticket
     */
    public function reserveRandomTicket() {
        $this->createTicket();
        $this->createOrder();
        $this->sendNotification();
    }

    /**
     * create ticket
     */
    protected function createTicket(){
        $this->ticketId = $this->createId();
        echo $this->getMessagePrefix() . "reserving ticket #$this->ticketId\n";
    }

    /**
     * create order
     */
    protected function createOrder(){
        $this->orderId = $this->createId();
        echo $this->getApiData();
        echo $this->getMessagePrefix() . "orderId #$this->orderId created\n";
    }

    /**
     * send notification
     */
    protected function sendNotification() {
        echo $this->getMessagePrefix() . "Sending admin notification: Order #$this->orderId created for event $this->event\n";
    }

    /**
     * create random id
     * @return int
     */
    protected function createId() {
        return rand($this->minNumber, $this->maxNumber);
    }

    /**
     * get prefix for message
     * @return string
     */
    protected function getMessagePrefix(){
        return "[$this->prefix] | ";
    }

    /**
     * get data from api server
     * @return string
     */
    protected function getApiData() {
        return '';
    }

}