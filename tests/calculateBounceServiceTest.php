<?php

/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 04/11/17
 * Time: 16:19
 */
namespace service\Test;

use PHPUnit\Framework\TestCase;
use service\calculateBounceService;


class calculateBounceServiceTest extends TestCase
{
    public function testGetBounce()
    {
        $result = [
            'SendDataPoints' => [
                [
                    'Bounces'   => 2,
                    'Timestamp' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ],
                [
                    'Bounces'   => 4,
                    'Timestamp' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ],
                [
                    'Bounces'   => 12,
                    'Timestamp' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ],
            ]
        ];

        $this->assertEquals(
            18,
            calculateBounceService::getBounce($result),
            'When getBounce the result should equal 18'
        );
    }

    public function testHasStatisticsToday()
    {
        $result = ['Timestamp' => (new \DateTime('now'))->format('Y-m-d H:i:s')];

        $this->assertEquals(
            true,
            calculateBounceService::hasStatisticsToday($result),
            'When hasStatisticsToday the result should equal true'
        );
    }

}