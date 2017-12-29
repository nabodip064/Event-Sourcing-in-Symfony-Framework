<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 12/22/17
 * Time: 12:33 PM
 */

namespace AppBundle\DataProvider;

use AppBundle\DataProvider\DateTimeModel;

class GetDateTime
{
    /**
     * @return string $dateTimeJson
     */
    public function whenOccured()
    {
        $dateTimeObj = new DateTimeModel();
        $dateTimeObj->currentDate= date('Y-m-d');
        $dateTimeObj->currentTime = date('h:i:sa');

        $dateJsonData = json_encode($dateTimeObj);

        return $dateJsonData;
    }
}