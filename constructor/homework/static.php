<?php

	Class StaticExample {

		public static $a_st = 1;
		public $b_pb = 1;

		public function run_static() {
			self::$a_st++;
		}

		public function run_public() {
			// Fatal error: Access to undeclared static property: StaticExample::$b_pb
			self::$b_pb++;
		}

	}

	for ($i=0; $i < 10; $i++) { 
		StaticExample::run_static();
		StaticExample::run_public();
		echo  'Static a: '.StaticExample::$a_st.', public b: '.StaticExample::$a_st.'<br/>';
	}

?>