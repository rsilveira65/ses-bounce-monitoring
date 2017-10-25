<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 25/10/17
 * Time: 09:25
 */

namespace service;

use Aws\Ses\SesClient;


class sesClientService
{
    /**
     * @param $parameters
     * @return SesClient
     */
    static function getSESClient($parameters)
    {
        return new SesClient([
            'version' => 'latest',
            'region' => $parameters['region'],
            'credentials' => [
                'key' => $parameters['access_key'],
                'secret' => $parameters['secret_key'],
            ]
        ]);
    }
}