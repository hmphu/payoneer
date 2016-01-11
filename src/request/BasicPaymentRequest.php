<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:42:33
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:08:30
 */

namespace hmphu\payoneer\request;

/**
 * Class BasicPaymentRequest
 * @package hmphu\payoneer\request
 */
class BasicPaymentRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $paymentId
     */
    function __construct($paymentId) {
        $this->parameters['p4'] = $paymentId;
    }
}
