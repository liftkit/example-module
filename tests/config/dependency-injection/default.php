<?php

	use LiftKit\Loader\File\Script as ScriptLoader;
	use LiftKit\Loader\File\Config as ConfigLoader;
	use LiftKit\Loader\File\View as ViewLoader;

	use LiftKit\Application\Application as Application;
	use LiftKit\Config\Config;
	use LiftKit\Router\Http as HttpRouter;


	$container->setSingletonRule(
		'App.Config',
		function ()
		{
			return new Config;
		}
	);


	$container->setSingletonRule(
		'App.Router',
		function ()
		{
			return new HttpRouter;
		}
	);