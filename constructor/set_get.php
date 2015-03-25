<?php

	Class SetGet {
		private $name = 'Denis';

		public function getter() {
			return $this->name;
		}

		public function setter($new_value) {
			return $this->name = $new_value;
		}

	}

	$name_exp = new SetGet();
	echo $name_exp->getter();
	echo "<br>";
	echo $name_exp->setter('Vitalii');

?>