<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:45:33
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:08:30
 */

namespace hmphu\payoneer\request;

/**
 * Class GetPayeesReportRequest
 * @package hmphu\payoneer\request
 */
class GetPayeesReportRequest extends RequestAbstract implements RequestInterface
{
    
    // Only XML reports are supported (API v3.5.0.0)
    const REPORT_TYPE_XML = 0;
    
    /**
     * @param $startDate
     * @param $endDate
     */
    function __construct($startDate, $endDate) {
        $this->parameters['p5'] = $startDate;
        $this->parameters['p6'] = $endDate;
        $this->parameters['p4'] = self::REPORT_TYPE_XML;
    }
}