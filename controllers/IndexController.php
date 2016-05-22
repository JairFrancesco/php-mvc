<?php
require_once($config->controllers_dir . 'MainController.php');

class IndexController extends MainController
{
	public function index() {
		echo 'hello this is index';
		echo '<pre>';
		print_r($this->getURI());
	}

	public function test() {
		echo 'hello this is test';
	}
}
?>