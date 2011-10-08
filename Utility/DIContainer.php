<?php
namespace Utility;

require_once __DIR__.'/../Vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class DIContainer {

	private $container;

	function __construct(){}

	public function init(){
		$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
		$loader->registerNamespaces(array(
    		'Symfony' => __DIR__.'/../Vendor',
			'Services' => __DIR__.'/../'
		));
		$loader->register();
		$this->container = new ContainerBuilder();
		$loader = new YamlFileLoader($this->container, new FileLocator(__DIR__.'/../configs'));
		$loader->load('di.yaml');
	}

	public function get($id){
		
		return $this->container->get($id);
	}

}
