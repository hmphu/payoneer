<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:48:15
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 18:31:00
 */

namespace hmphu\payoneer\request;

/**
 * Class MovePayeeProgramRequest
 * @package hmphu\payoneer\request
 */
class MovePayeeProgramRequest extends RequestAbstract implements RequestInterface
{
    /**
     * @param $username string Partner’s account username assigned by Payoneer (the partner to which the payee will be moved).
     * @param $password string Partner’s unique password assigned by Payoneer (the partner to which the payee will be moved).
     * @param $partnerId string Partner’s account ID number in the Payoneer system (the partner to which the payee will be moved).
     * @param $payeeId string Partner’s payee ID as it appears in the Payoneer system (the payee to be moved).
     */
    function __construct($username, $password, $partnerId, $payeeId) {
        $this->parameters['p4'] = $username;
        $this->parameters['p5'] = $password;
        $this->parameters['p6'] = $partnerId;
    }
}