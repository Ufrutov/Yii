<?php

	Class Person {

		private $name;
		private $surname;
		private $age;
		private $gender;
		static $total = 0;

		function __construct($name, $surname, $age, $gender) {
			$this->name = $name;
			$this->surname = $surname;
			$this->age = $age;
			$this->gender = $gender;

			self::$total++;
		}

		public function about() {
			echo 'This is '.$this->name.' '.$this->surname.'. '.$this->name.' are '.$this->gender.' and '.$this->age.' years old.<br/>';
		}

	}

	$person_1 = new Person('John', 'Johnson', '25', 'man');
	$person_2 = new Person('Marry', 'Johnson', '23', 'woman');
	$person_3 = new Person('Pete', 'Polson', '45', 'man');
	$person_4 = new Person('Annet', 'Goodman', '33', 'woman');

	$person_1->about();
	$person_2->about();
	$person_3->about();
	$person_4->about();

	echo '<hr/>Class '.get_class($person_1).' created '.Person::$total.' objects';
?>