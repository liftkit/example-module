<?php


	namespace ExampleModule\Controller;

	use LiftKit\Controller\Controller as LiftKitController;
	use LiftKit\DependencyInjection\Container\Container;

	use LiftKit\Loader\File\View as ViewLoader;
	use LiftKit\Document\Document;
	

	abstract class Controller extends LiftKitController
	{
		/**
		 * @var ViewLoader
		 */
		protected $viewLoader;


		public function __construct (Container $container)
		{
			parent::__construct($container);

			$this->viewLoader  = $this->container->getObject('ExampleModule.ViewLoader');
		}
	}