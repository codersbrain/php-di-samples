<?php
namespace Services;

class MyService {

	private $myMessage;

	public function __construct(MyMessage $message=null){
		$this->myMessage = $message;
	}

	public function setMyMessage(MyMessage $message){

		$this->myMessage = $message;
	}

	public function getMessage(){
		return $this->myMessage->getMessage();
	}

}
