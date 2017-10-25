<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 25/10/17
 * Time: 09:20
 */

namespace service;

class configService
{
    const CONFIG_PATH = 'config/parameters.yml';

    /**
     * @return array
     */
    static function getConfig()
    {
        return \Spyc::YAMLLoad(self::CONFIG_PATH);
    }
}