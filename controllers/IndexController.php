<?php
require_once($config->controllers_dir . 'MainController.php');

class IndexController extends MainController
{
	// ALL controllers MUST implement the 'index' method.
	public function index() {
		// you can get the URI with the method $this->getURI();
		// ex: http://yourdomain.com/controller/function/your/additional/uri?id=1
		// $this->getURI() will return an array with values -> ['your', 'additional', 'uri'];
		// the query string of the example URL can be obtained with $_GET['id'];
		echo 'hello this is index';
		echo '<pre>';
		print_r($this->getURI());
	}

	// URL will look like this:
	// http://yourdomain.com/index/test
	// where 'index' is the controller and 'test' is the method.
	// Note that 'index' was set to use IndexController by default.
	// All other controllers you create must have filenames that are the same as its class name.
	// So if you create a controller named 'Home', you must save it in a file called Home.php;
	public function test() {
		$data = array(
			'message' => 'This is the index testview file'
		);

		// load your view file using the $this->loadView() method
		// the first argument is the viewfile and the second is the data to pass
		$this->loadView('testview', $data);
	}
}
?>