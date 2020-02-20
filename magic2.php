<?php

	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', 'On');
	
	/**
	 * construct magic method
	 */
	class Person
	{
		private $name;
		private $age;

		public function __construct($name="",$age=1){
			$this->name = $name;
			$this->age = $age;
		}

		// get magic method
		public function __get($propertyName){
			// if ($propertyName == "age") {
	  //           if ($this->age > 30) {
	  //               return $this->age - 10;
	  //           } else {
	  //               return $this->$propertyName;
	  //           }
	  //       }
			return $this->$propertyName;
		}

		// set magic method
		public function __set($property,$value){
			$this->$property = $value;
		}

	}

	// test get magic method
	// $person = new Person('John','22');
	// echo "Name: ".$person->name;
	// echo "<br>";
	// echo "Age: ".$person->age;

	// test set magic method
	$person = new Person('John');
	$person->sex = 30;
	echo $person->sex;
?>