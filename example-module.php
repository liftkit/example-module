<?php

	use LiftKit\DependencyInjection\Container\Container;
	use ExampleModule\Module\ExampleModule;


	/**
	 * @var Container $container
	 */

	require(__DIR__ . '/config/dependency-injection/default.php');

	$exampleModule = new ExampleModule($container);
	
	return $exampleModule;