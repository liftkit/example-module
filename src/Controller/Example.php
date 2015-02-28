<?php


	namespace ExampleModule\Controller;
	
	
	class Example extends Controller
	{
		
		
		
		public function page1 ()
		{
			return $this->viewLoader->load('page1');
		}
		
		
		
		public function page2 ()
		{
			return $this->viewLoader->load('page2');
		}
	}