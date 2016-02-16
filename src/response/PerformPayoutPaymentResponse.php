<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 17:23:35
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class PerformPayoutPaymentResponse
 * @package hmphu\payoneer\response
 */
class PerformPayoutPaymentResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'002' => 'Payee does not exist.',
		'003' => 'Insufficient funds',
		'004' => 'Payment ID {{Internal Payment ID}} already exists.',
		'006' => 'Internal error.',
		'008' => 'Internal error.',
		'011' => 'Funding not enabled.',
		'010' => 'Payee is inactive.',
		'030' => 'Currency Mismatch',
		'099' => 'Unauthorized access/Internal error.',
		'001m' => 'Minimum/ maximum loading amount / Amount to load is less or equal to zero.',
		'002b' => 'Internal error.',
		'002t' => 'Internal error.',
		'002em' => 'Payee does not exist.',
		'006n' => 'Internal error.',
		'007d' => 'Internal error.',
		'007f' => 'Internal error.',
		'007g' => 'Internal error.',
		'PE1028' => 'Invalid currency.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized Access or invalid parameters. Please check your IP address and parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'PerformPayoutPayment';

	/** @var string Error Key **/
	protected $errorKey = 'PerformPayoutPayment';
}