<?php
require_once($config->controllers_dir . 'MainController.php');

class Home extends MainController
{
	// ALL controllers MUST implement the 'index' method.
	public function index() {
		echo 'hello this is home index';
		echo '<pre>';
		print_r($this->getURI());
	}

	public function test() {
		echo 'hello this is home test';
	}
}
?>