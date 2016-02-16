<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:23:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 16:33:41
 */

namespace hmphu\payoneer\response;

/**
 * Interface ResponseInterface
 * @package hmphu\payoneer
 */
interface ResponseInterface {
    
    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getData();
}