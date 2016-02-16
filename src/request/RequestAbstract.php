<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:36:01
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 15:27:41
 */

namespace hmphu\payoneer\request;

/**
 * Class RequestAbstract
 * @package hmphu\payoneer\request
 */
abstract class RequestAbstract
{
    
    /**
     * @var Parameters
     */
    public $parameters = [];
    
    /**
     * @return array
     */
    public function getParameterArray() {
        return $this->parameters;
    }
}
