<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:49:29
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 14:14:36
 */

namespace hmphu\payoneer\request;

/**
 * Class PayeeSignupAutoPopulationRequest
 * @package hmphu\payoneer\request
 */
class PayeeSignupAutoPopulationRequest extends RequestAbstract implements RequestInterface
{
    
    /**
     * @var PartnerDetails
     */
    private $partnerDetails;
    
    /**
     * @var PayeeDetails
     */
    private $payeeDetails;
    
    /**
     * @param PartnerDetails $partnerDetails
     * @param PayeeDetails   $payeeDetails
     */
    function __construct(PartnerDetails $partnerDetails, PayeeDetails $payeeDetails) {
        $this->partnerDetails = $partnerDetails;
        $this->payeeDetails = $payeeDetails;
        $this->parameters['xml'] = $this->buildXML();
    }
    
    /**
     * @return string
     */
    private function buildXML() {
        $details = (array)$this->partnerDetails;
        $personalDetails = (array)$this->payeeDetails;
        $xmlArray = ['Details' => $details, 'PersonalDetails' => $personalDetails, ];
        $xml = Verdant\Array2XML::createXML('PayoneerDetails', $xmlArray);
        return $xml->saveXML();
    }
}