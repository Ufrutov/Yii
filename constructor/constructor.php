<?php
	// __constructor
	// setter, getter
	// static, self, parent
	Class Table {
		public $legs;
		static $total_tables;

		function __construct($legs_count = 4) {
			$this->legs = $legs_count;
			self::$total_tables++;
		}
	}

	$table_1 = new Table();
	echo 'table_1 total legs: '.$table_1->legs.'<br/>';

	echo 'Total tables: '.Table::$total_tables.'<br/>';	

	$table_2 = new Table(3);
	echo 'table_1 total legs: '.$table_2->legs.'<br/>';

	$table_2 = new Table(6);
	echo 'table_1 total legs: '.$table_2->legs.'<br/>';	

	echo 'Total tables: '.Table::$total_tables.'<br/>';

?>