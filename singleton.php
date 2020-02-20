<?php
	
	// singleton (creational design pattern)
	
	class Singleton
	{
		private static $instance;

		public $name;

		public static function getInstance(){
			if(!(self::$instance instanceof self)){
				self::$instance = new self();
			}
			return self::$instance;
		}
	}

	$singleton = Singleton::getInstance();
	var_dump($singleton);
	

?>