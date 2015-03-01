<?php


	namespace ExampleModule\Tests\Unit\Controller;

	use ExampleModule\Tests\Helpers\TestCase;
	use ExampleModule\Controller\Example as ExampleController;


	class ExampleTest extends TestCase
	{
		/**
		 * @var ExampleController
		 */
		protected $controller;


		public function setUp ()
		{
			parent::setUp();
			$this->controller = new ExampleController($this->container);
		}


		public function testPage1 ()
		{
			$this->assertEquals(
				(string) $this->controller->dispatch('page1'),
				'page1'
			);
		}


		public function testPage2 ()
		{
			$this->assertEquals(
				(string) $this->controller->dispatch('page2'),
				'page2'
			);
		}
	}
