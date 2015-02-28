<?php

	use LiftKit\DependencyInjection\Container\Container;
	use LiftKit\Loader\File\Script as ScriptLoader;
	use LiftKit\Loader\File\Config as ConfigLoader;
	use LiftKit\Loader\File\View as ViewLoader;

	use LiftKit\Config\Config;


	$container->setSingletonRule(
		'ExampleModule.ConfigLoader',
		function ()
		{
			return new ConfigLoader(dirname(dirname(__DIR__)) . '/config/', '.php');
		}
	);


	$container->setSingletonRule(
		'ExampleModule.ScriptLoader',
		function ()
		{
			return new ScriptLoader(dirname(dirname(__DIR__)) . '/config/', '.php');
		}
	);


	$container->setSingletonRule(
		'ExampleModule.ViewLoader',
		function ()
		{
			return new ViewLoader(dirname(dirname(__DIR__)) . '/views/', '.php');
		}
	);


	$container->setSingletonRule(
		'ExampleModule.Config',
		function ()
		{
			return new Config;
		}
	);


	$container->setSingletonRule(
		'ExampleModule.Router',
		function (Container $container)
		{
			return $container->getObject('App.Router');
		}
	);
	