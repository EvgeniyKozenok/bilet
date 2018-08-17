<?php

namespace App\Factory;

/**
 * Class ReservatorFactory
 * @package App\Factory
 */
class ReservatorFactory
{
    /**
     * @param $eventId
     * @return mixed
     * @throws \Exception
     */
    public static function build($eventId)
    {
        $reservatorType =  'App\Reservator\\'.self::getReservatorType($eventId);
        if (class_exists($reservatorType)) {
            return new $reservatorType($eventId);
        } else {
            throw new \Exception("Wrong reservator type");
        }
    }

    /**
     * @param $eventId
     * @return string
     */
    private static function getReservatorType($eventId) {
        return $eventId % 2 === 0 ? 'Reservator' : 'ReservatorApiPartner';

    }
}