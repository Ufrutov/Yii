<?php

	class User {

		public $user_name = '';
		private $inside = false;

		function log_in() {
			$this->inside = true;
			echo 'Someone is here..<br/>';
		}

		function log_out() {
			$this->inside = false;
			echo 'Someone is running ayway..<br/>';
		}

		function is_inside() {
			return $this->inside;
		}

	}

	class Admin extends User {

		function create_board($title) {
			echo $this->user_name.' created new board: '.$title.'<br/>';
		}

		function user_ban($name) {
			echo $this->user_name.' banned user '.$name->user_name.'. Sorry.<br/>';
		}

	}

	$user = new User();
	$user->user_name = "Jack";
	$user->log_in();

	echo $user->user_name.' is here, and he it is '.($user->is_inside() ? 'logged in. Hello, '.$user->user_name.'!<br/>' : 'logged out. Bye, '.$user->user_name.'.<br/>');
	echo '<hr/>';

	$admin = new Admin();
	$admin->user_name = "Pete";
	$admin->log_in();

	echo $admin->user_name.' is here, and he it is '.($admin->is_inside() ? 'logged in. Hello, '.$admin->user_name.'!<br/>' : 'logged out. Bye, '.$admin->user_name.'.<br/>');
	echo '<hr/>';

	$admin->create_board('My little Pony');

	$admin->user_ban($user);

?>