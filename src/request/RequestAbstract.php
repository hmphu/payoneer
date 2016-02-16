<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:36:01
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 09:54:09
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
     * @var Request method
     */
    public $method = "GET";
    
    /**
     * @return array
     */
    public function getParameterArray() {
        return $this->parameters;
    }
}
