<?php

class MyConfig {
	
	private $config;
	
	public function __construct(){
		
	}
	
	public function setConfig($config){
		
		$this->config = $config;
	}
	
	public function get($key){
		
		return $this->config->$key;
	}
	
}