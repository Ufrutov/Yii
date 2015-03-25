<?php

	class Fruit {

		public $fruit_name;

		public function about() {
			echo 'I will tell You about one great fruit: '.$this->fruit_name.'.<br/>';
			$this->eat_this();
		}

	}

	class Apple extends Fruit {

		public function eat_this() {
			echo 'I like '.$this->fruit_name.' very much and will eat it all just now!<hr/>';
		}

	}

	$apple = new Apple();
	$apple->fruit_name = 'Apple';
	$apple->about();

	class Orange extends Fruit {

		public function eat_this() {
			echo $this->fruit_name.' is great, it is full of vitamines and so fresh! Eat it with me, please!<hr/>';
		}

	}

	$orange = new Orange();
	$orange->fruit_name = 'Orange';
	$orange->about();

	class Avocado extends Fruit {

		public function eat_this() {
			echo $this->fruit_name.' is not a fruit, and I don\'t like it so much, so we will let it out.<hr/>';
		}

	}

	$avocado = new Avocado();
	$avocado->fruit_name = 'Avocado';
	$avocado->about();

?>