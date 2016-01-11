<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:47:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:08:30
 */

namespace hmphu\payoneer\request;

/**
 * Class GetPaymentStatusRequest
 * @package hmphu\payoneer\request
 */
class GetPaymentStatusRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $payeeId
     * @param $paymentId
     */
    function __construct($payeeId, $paymentId) {
        $this->parameters['p4'] = $payeeId;
        $this->parameters['p5'] = $paymentId;
    }
}
