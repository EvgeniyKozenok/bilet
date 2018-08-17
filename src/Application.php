<?php

namespace App;

use App\Factory\ReservatorFactory;

class Application
{
    /**
     * Application start
     * @throws \Exception
     */
    public function start()
    {
        $eventIds = [14, 21, 587, 82];
        foreach ($eventIds as $eventId) {
            try {
                $reservator = ReservatorFactory::build($eventId);
                $reservator->reserveRandomTicket();
                echo "<h5>--------------------------------------------------</h5>\n";
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }


}