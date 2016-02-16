<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 18:21:41
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class CancelPaymentResponse
 * @package hmphu\payoneer\response
 */
class CancelPaymentResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'002' => 'Payment has already been processed.',
		'003' => 'Payment has already been cancelled / rejected.',
		'004' => 'Failed to cancel payment.',
		'006' => 'Internal error',
		'099' => 'Internal error.',
		'PE1026' => 'Invalid payment ID.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'CancelPayment';

	/** @var string Error Key **/
	protected $errorKey = 'CancelPayment';
}