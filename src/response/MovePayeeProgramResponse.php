<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:37:50
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 18:32:08
 */

namespace hmphu\payoneer\response;

use hmphu\payoneer\ApiAbstract;

/**
 * Class MovePayeeProgramResponse
 * @package hmphu\payoneer\response
 */
class MovePayeeProgramResponse extends ResponseAbstract implements ResponseInterface {
	
	/** @var array Status codes **/
	public $errors = [
		'001' => 'Field format is invalid or is not supported.',
		'002' => 'No active payout method for the card holder.',
		'003' => 'Internal error.',
		'006' => 'Internal error.',
		'PE1013' => 'Payee ID is invalid.',
		'000FFF0' => 'API function not allowed by partner.',
		'A00B556F' => 'Unauthorized access or invalid parameters. Please check your IP address and parameters.',
		'4B501FF5' => 'Cannot find command or wrong method name',
	];

	/** @var string Response Key **/
	protected $responseKey = 'MovePayeeProgram';

	/** @var string Error Key **/
	protected $errorKey = 'MovePayeeProgram';
}