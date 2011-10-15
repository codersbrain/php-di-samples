<?php
namespace Services;
/**
* 
* @author dhydrated
* @since Oct 15, 2011
*/
interface MyService {
	
	public function setMyMessage(MyMessage $message);
	
	public function setMyValidator(MyValidator $myValidator);
	
	public function displayMessage();
}