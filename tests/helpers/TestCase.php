<?php


	namespace ExampleModule\Tests\Helpers;
	
	use LiftKit\DependencyInjection\Container\Container;
	use ExampleModule\Module\ExampleModule;
	use PHPUnit_Framework_TestCase;
	
	
	class TestCase extends PHPUnit_Framework_TestCase
	{
		/**
		 * @var Container
		 */
		protected $container;



		public function setUp ()
		{
			$this->container = $container = new Container;

			require(dirname(__DIR__) . '/config/dependency-injection/default.php');
			require(dirname(dirname(__DIR__)) . '/config/dependency-injection/default.php');
		}


		protected function initializeModule ()
		{
			$module = new ExampleModule($this->container);
			
			$module->initialize();
			
			return $module;
		}
	}