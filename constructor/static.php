<?php

	Class A {
		public static $a = 10;

		public static function modified_a () {
			return static::$a+5;
		}
	}

	// echo "Test A class <br/>";
	// echo A::$a;
	// echo '<br/>';
	// echo A::modified_a();
	// echo '<br/>';
	// echo A::modified_a();
	// echo '<br/>';
	// echo A::modified_a();

	Class B extends A {
		static $a = 25;
		static function attribute_test() {
			return parent::$a;
		}
		static function method_test() {
			return parent::modified_a();
		}
		static function modified_a() {
			echo '--------------------<br/>';
			return parent::modified_a();
		}
	}

	echo 'Class B<br/>';
	echo 'Attribute A class - '.A::$a;
	echo '<br/>';
	echo 'Attribute B class - '.B::$a;
	echo '<br/>';
	echo 'modified_a A class - '.A::modified_a();
	echo '<br/>';
	echo 'attribute_test B class - '.B::attribute_test();
	echo '<br/>';
	echo 'attribute_test B class - '.B::method_test();
	echo '<br/>';
	echo 'modified_a B class - '.B::modified_a();
	echo '<br/>';



?>