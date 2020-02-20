<?php
	
	/**
	 * construct magic method
	 */
	class Person
	{
		public $name;
		public $age;
		public $sex;

		// construct magic method
		public function __construct($name="",$age="",$sex=""){
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
		}

		// destructor magic method
		public function __destruct(){
			// echo $this->name." Object is deleted!";
		}

		// call magic method. When an undefined method is called, this is executed
		public function __call($funName,$args){
			echo "The function you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
			print_r($args); // Print the parameter list of the method that is not existed.
			echo ")does not exist!！<br>\n";  

		}

		// callstatic magic method. When an undefined static method is called, this is executed.
		public static function __callStatic($funName, $arguments){
			echo "The static method you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
			print_r($arguments); // Print the parameter list of the method that is not existed.
			echo ")does not exist！<br>\n";
		}

		public function __clone(){
        	echo __METHOD__."your are cloning the object.<br>";
    	}


		public function say(){
			echo "Name: ".$this->name." Age: ".$this->age." Sex: ".$this->sex."<br>";
		}
	}

	// $person = new Person();
	// $person->say();

	// $person = new Person('Test', '22', 'Male');
	// $person->say();

	//  calls only the destruct method
	// unset($person);

	// test call magic method
	// $person = new Person('Test','20','Female');
	// $person->test('test','test');

	// test callstatic magic method
	// Person::run('name');

	$person = new Person("John");
	$person2 = clone $person;
	var_dump($person2);

?>