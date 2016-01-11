<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:48:15
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:08:30
 */

namespace hmphu\payoneer\request;

/**
 * Class PayeeRequest
 * @package hmphu\payoneer\request
 */
class PayeeRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $payeeId
     */
    function __construct($payeeId) {
        $this->parameters['p4'] = $payeeId;
    }
}