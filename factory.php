<?php
	
	interface Factory{
		public function getProduct();
	}

	interface Product{
		public function getName();
	}

	class FirstFactory implements Factory{
		public function getProduct(){
			return new FirstProduct();
		}
	}

	class SecondFactory implements Factory{
		public function getProduct(){
			return new SecondProduct();
		}
	}

	class FirstProduct implements Product{
		public function getName(){
			return "This is the first product";
		}
	}

	class SecondProduct implements Product{
		public function getName(){
			return "This is the second product";
		}
	}

	$firstFactory = new FirstFactory();
	$firstProduct = $firstFactory->getProduct();
	print_r($firstProduct->getName());


	$secondFactory = new SecondFactory();
	$secondProduct = $secondFactory->getProduct();
	print_r($secondProduct->getName());
?>