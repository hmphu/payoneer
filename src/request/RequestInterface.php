<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:23:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 13:33:45
 */

namespace hmphu\payoneer\request;

/**
 * Interface RequestInterface
 * @package hmphu\payoneer
 */
interface RequestInterface {
    
    /**
     * @return array
     */
    public function getParameterArray();
}