<?php

	Class Base {

		private $name;
		private $surname;
		private $age;
		private $gender;

		public function about() {
			echo 'This is '.$this->name.' '.$this->surname.'. '.$this->name.' are '.$this->gender.' and '.$this->age.' years old.<br/>';
		}

		public function set($var, $value) {
			$this->$var = $value;
		}

	}

	$person_1 = new Base();
	$person_2 = new Base();
	$person_3 = new Base();
	$person_4 = new Base();

	$person_1->set('name', 'John');
	$person_1->set('surname', 'Johnson');
	$person_1->set('age', '25');
	$person_1->set('gender', 'man');
	$person_1->about();

	$person_2->set('name', 'Marry');
	$person_2->set('surname', 'Johnson');
	$person_2->set('age', '23');
	$person_2->set('gender', 'woman');
	$person_2->about();

	$person_3->set('name', 'Pete');
	$person_3->set('surname', 'Polson');
	$person_3->set('age', '45');
	$person_3->set('gender', 'man');
	$person_3->about();

	$person_4->set('name', 'Annet');
	$person_4->set('surname', 'Goodman');
	$person_4->set('age', '33');
	$person_4->set('gender', 'woman');
	$person_4->about();
	
?>