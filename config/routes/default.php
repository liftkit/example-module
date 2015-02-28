<?php


	use LiftKit\DependencyInjection\Container\Container;
	use LiftKit\Router\Http as Router;


	/**
	 * @var Router $router
	 * @var Container $container
	 */


	$router->registerControllerFactory(
		'/example',
		function () use ($container)
		{
			return $container->getObject('ExampleModule.Controller.Example');
		},
		'ExampleModule.Example'
	);

