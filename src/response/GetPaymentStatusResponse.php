<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 17:50:43
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class PayeeSignupResponse
 * @package hmphu\payoneer\response
 */
class GetPaymentStatusResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'006' => 'Internal error.',
		'PE1011' => 'Required field is missing.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters.',
		'PE1026' => 'Invalid PaymentID or PayeeID.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'GetPaymentStatus';

	/** @var string Error Key **/
	protected $errorKey = 'GetPaymentStatus';
}