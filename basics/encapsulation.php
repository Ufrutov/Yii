<?php
	
	class Parent_Class {

		public $public_var = 'Public_var';
		protected $protected_var = 'Protected_var';
		private $pritvate_var = 'Pritvate_var';

		function print_var() {
			echo 'We are inside the '.get_class($this).'. There is some variables: '.$this->public_var.', '.$this->protected_var.' and '.$this->pritvate_var.'. <br/>';
		}
	}

	$parent_object = new Parent_class();
	$parent_object->print_var();

	class Child_Class extends Parent_class {

	}

	$child_object = new Child_Class();
	$child_object->print_var();

?>