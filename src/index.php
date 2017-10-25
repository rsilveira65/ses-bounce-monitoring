<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 25/10/17
 * Time: 09:18
 */

require '../vendor/autoload.php';

use service\configService;
use service\sesClientService;
use service\calculateBounceService;

$parameters = configService::getConfig();
$client = sesClientService::getSESClient($parameters);

try {

    echo calculateBounceService::getBounce(
        $client->getSendStatistics([])
    ) . PHP_EOL;

} catch (Exception $e) {

    echo($e->getMessage() . PHP_EOL);
}

