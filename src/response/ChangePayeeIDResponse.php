<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 17:54:27
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class PayeeSignupResponse
 * @package hmphu\payoneer\response
 */
class ChangePayeeIDResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'002' => 'Internal error.',
		'003' => 'New payee ID already exists.',
		'006' => 'Internal error.',
		'PE1013' => 'Payee ID is invalid.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];

	/** @var string Response Key **/
	protected $responseKey = 'ChangePayeeID';

	/** @var string Error Key **/
	protected $errorKey = 'ChangePayeeID';
}