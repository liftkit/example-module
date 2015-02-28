<?php


	use LiftKit\DependencyInjection\Container\Container;
	use LiftKit\Router\Http as Router;


	/**
	 * @var Router $router
	 * @var Container $container
	 */


	$router->registerController(
		'/example',
		$container->getObject('ExampleModule.Controller.Example'),
		'ExampleModule.Example'
	);

