<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:36:01
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-16 18:24:46
 */

namespace hmphu\payoneer\response;

/**
 * Class ResponseAbstract
 * @package hmphu\payoneer\response
 */
abstract class ResponseAbstract
{
	/** @var string **/
	public $code;
	/** @var string **/
	public $error;
	/** @var object **/
	protected $_responseObj;
	/** @var array Parsed response **/
	protected $response;
	/** @var array Genera errors **/
	private $_generalErrors = [];
	/** @var array Status codes **/
	public $errors = [];
	/** @var string Response Key **/
	protected $responseKey = 'PayoneerResponse';
	/** @var string Error Key **/
	protected $errorKey = 'PayoneerResponse';

	/**
	 * Constructor
	 */
	function __construct(\GuzzleHttp\Psr7\Response $response){
		$this->_responseObj = $response;
		$xmlString = $this->_responseObj->getBody()->getContents();
		if(!empty($xmlString)){
			$this->response = $this->xmlToArray($xmlString);
			if(array_key_exists($this->errorKey, $this->response)){
				if(isset($this->response[$this->errorKey]['Code']))
					$this->code = $this->response[$this->errorKey]['Code'];

				if(isset($this->response[$this->errorKey]['Status']))
					$this->code = $this->response[$this->errorKey]['Status'];
				
				if(isset($this->response[$this->errorKey]['Result']))
					$this->code = $this->response[$this->errorKey]['Result'];
				
				if(isset($this->response[$this->errorKey]['Error']))
					$this->error = $this->response[$this->errorKey]['Error'];

				if(isset($this->response[$this->errorKey]['Error']))
					$this->error = $this->response[$this->errorKey]['Error'];
			}

			$this->checkErrors();
		}
		return $this;
	}

	private function checkErrors(){
		if($this->code){
			$errors = array_merge($this->_generalErrors,$this->errors);
			if(array_key_exists($this->code, $errors)){
				$message = $this->code. " - " .($this->error ? $this->error : $errors[$this->code]);
				throw new \Exception($message, is_long($this->code) ? $this->code : 0);
			}
		}

		return $this;
	}

	/**
     * @return string
     */
    public function getCode(){
    	return $this->code;
    }

	/**
	 * @return mixed
     */    
    public function getData(){
    	return $this->response[$this->responseKey];
    }

	/**
	* Convert XML string to array.
	*
	* @param String $xml_string
	* @return mixed
	*/
	protected function xmlToArray($xml_string) {
		return \Verdant\XML2Array::createArray($xml_string);
	}
}
