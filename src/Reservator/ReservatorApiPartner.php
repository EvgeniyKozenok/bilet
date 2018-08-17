<?php

namespace App\Reservator;

/**
 * Class ReservatorApiPartner
 * @package App\Reservator
 */
class ReservatorApiPartner extends Reservator
{
    /**
     * @var int
     */
    protected $minNumber = 80000;
    /**
     * @var int
     */
    protected $maxNumber = 90000;
    /**
     * @var string
     */
    protected $prefix = 'partnerApi';

    /***
     * order create
     */
    protected function createOrder() {
        echo $this->getMessagePrefix() . "reserving ticket #$this->ticketId VIA PARTNER API CALL\n";
        echo $this->getOrderMessage();
    }

}