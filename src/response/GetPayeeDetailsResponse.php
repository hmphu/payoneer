<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 19:39:35
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class PayeeSignupResponse
 * @package hmphu\payoneer\response
 */
class GetPayeeDetailsResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'002' => 'Payee does not exist.',
		'006' => 'Internal error.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized Access or invalid parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'GetPayeeDetails';

	/** @var string Error Key **/
	protected $errorKey = 'GetPayeeDetails';
}