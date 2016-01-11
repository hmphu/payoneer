<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:44:41
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:08:30
 */

namespace hmphu\payoneer\request;

/**
 * Class ChangePayeeIdRequest
 * @package hmphu\payoneer\request
 */
class ChangePayeeIdRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @param $oldId
     * @param $newId
     */
    function __construct($oldId, $newId) {
        $this->parameters['p4'] = $oldId;
        $this->parameters['p5'] = $newId;
    }
}
