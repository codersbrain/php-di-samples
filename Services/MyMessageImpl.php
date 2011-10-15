<?php
namespace Services;
/**
* 
* @author dhydrated
* @since Oct 15, 2011
*/
class MyMessageImpl implements MyMessage{

	/**
	 * @var MyDao
	 */
	private $myDao;
	
	public function __construct(MyDao $myDao){
		$this->myDao = $myDao;
	}
	
	public function getMessage(){
		return $this->myDao->getData();
	}

}
