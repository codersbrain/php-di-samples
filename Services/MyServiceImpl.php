<?php
namespace Services;
/**
* 
* @author dhydrated
* @since Oct 15, 2011
*/
class MyServiceImpl implements MyService{

	/**
	 * @var MyMessage
	 */
	private $myMessage;
	
	/**
	 * @var MyValidator
	 */
	private $myValidator;

	public function setMyMessage(MyMessage $message){
		$this->myMessage = $message;
	}

	public function setMyValidator(MyValidator $myValidator){
		$this->myValidator = $myValidator;
	}

	public function displayMessage(){
		return ($this->myValidator) ? $this->myMessage->getMessage() : "Invalid message";
	}

}
