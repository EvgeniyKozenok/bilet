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

    /**
     * @return bool|string
     */
    protected function getApiData() {
        return $this->getMessagePrefix() . "reserving ticket #$this->ticketId VIA PARTNER API CALL\n";
    }

}