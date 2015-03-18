<?php
	
	class Parent_Class {

		public $public_var = 'Public_var';
		protected $protected_var = 'Protected_var';
		private $pritvate_var = 'Pritvate_var';

		function print_var() {
			echo 'We are inside the '.get_class($this).'. There is some variables: '.$this->public_var.', '.$this->protected_var.' and '.$this->pritvate_var.'. <br/><hr/>';
		}

		function get_name() {
			return get_class($this);
		}
	}

	$parent_object = new Parent_class();
	echo 'We are inside the '.$parent_object->get_name().' class.<br/>';
	$parent_object->print_var();

	class Child_Class extends Parent_class {

	}

	$child_object = new Child_Class();
	echo 'We are inside the '.$child_object->get_name().' class.<br/>';
	$child_object->print_var();

	echo 'Trying to get public variable from class:<br/>';
	echo 'This is public_var: '.$child_object->public_var;
	echo '<hr/>';

	echo 'Trying to get protected variable from class (in before: Error..):<br/>';
	echo 'This is protected_var: '.$child_object->protected_var;
	echo '<hr/>';

?>