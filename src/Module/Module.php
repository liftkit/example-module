<?php


	namespace ExampleModule\Module;

	use LiftKit\Module\Module as LiftKitModule;
	
	use LiftKit\Loader\File\Script as ScriptLoader;
	use LiftKit\Loader\File\Config as ConfigLoader;

	use LiftKit\Config\Config;
	use LiftKit\Router\Router;


	abstract class Module extends LiftKitModule
	{
		/**
		 * @var ScriptLoader
		 */
		protected $scriptLoader;


		/**
		 * @var ConfigLoader
		 */
		protected $configLoader;


		/**
		 * @var Config
		 */
		protected $config;


		/**
		 * @var Router
		 */
		protected $router;


		public function initialize ()
		{
			$this->initializeDefault();
			$this->initializeControllers();
			$this->initializeRouter();
		}


		protected function initializeDefault ()
		{
			$this->scriptLoader = $this->container->getObject('ExampleModule.ScriptLoader');
			$this->configLoader = $this->container->getObject('ExampleModule.ConfigLoader');
			$this->config       = $this->container->getObject('ExampleModule.Config');
		}


		protected function initializeControllers ()
		{
			$this->loadDependencyInjectionConfig('dependency-injection/controller');
		}


		protected function initializeRouter ()
		{
			$this->router = $this->container->getObject('ExampleModule.Router');

			$this->loadRouteConfig('routes/default');
		}


		protected function loadDependencyInjectionConfig ($configFile)
		{
			$this->scriptLoader->load(
				$configFile,
				[
					'container' => $this->container,
				]
			);
		}


		protected function loadRouteConfig ($configFile)
		{
			$this->scriptLoader->load(
				$configFile,
				[
					'container' => $this->container,
					'router'    => $this->router,
				]
			);
		}
	}
