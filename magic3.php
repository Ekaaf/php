<?php

	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', 'On');

	class Person
	{
	    public $sex;
	    private $name;
	    private $age;

	    public function __construct($name="",  $age=25, $sex='Male')
	    {
	        $this->name = $name;
	        $this->age  = $age;
	        $this->sex  = $sex;
	    }

	    /**
	     * @param $content
	     *
	     * @return bool
	     */
	    public function __isset($content) {
	        echo "The {$content} property is private，the __isset() method is called automatically.<br>";
	        echo  isset($this->$content);
	    }

	    public function __unset($content) {
	        echo "It is called automatically when we use the unset() method outside the class.<br>";
	        echo  isset($this->$content);
	    }

	    public function __sleep(){
	    	echo "It is called when the serialize() method is called outside the class.<br>";
	    	return array('name','age');
	    }

	    public function __wakeup() {
	        echo "It is called when the unserialize() method is called outside the class.<br>";
	        $this->name = 2;
	        $this->sex = 'Male';
	        // There is no need to return an array here.
	    }

	    public function __toString(){
	    	return "Name:".$this->name;
	    }

	    public function __invoke(){
	    	echo "this is invoke";
	    }
	}

	// check isset function
	// $person = new Person("John", 25); // Initially assigned.
	// echo isset($person->sex),"<br>";
	// echo isset($person->name),"<br>";
	// echo isset($person->age),"<br>";

	// EXPLANATAION
	// if variable is private, then it calls the isset function inside the class
	// If variable is public, then it just performs the php isset function

	// check unset function
	// unset($person->sex),"<br>";
	// unset($person->name),"<br>";
	// unset($person->age),"<br>";

	//check serialize 
	// $person = new Person('John',22);
	// echo serialize($person);

	// check unserialize
	// $person = new Person('John'); // Initially assigned.
	// var_dump(serialize($person));
	// var_dump(unserialize(serialize($person)));

	// check tostring method
	// $person = new Person('Karim');
	// echo $person;

	// check invoke method
	// $person = new Person("John");
	// $person();

?>