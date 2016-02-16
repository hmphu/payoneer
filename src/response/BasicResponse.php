<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 16:35:02
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class PayeeSignupResponse
 * @package hmphu\payoneer\response
 */
class BasicResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'006' => 'Internal error.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized Access or invalid parameters. Please check your IP address and parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name.',
	];
}