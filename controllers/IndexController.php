<?php
require_once($config->base_dir . 'core/MainController.php');

class IndexController extends MainController
{
	// ALL controllers MUST implement the 'index' method.
	public function index() {
		// you can get the URI with the method $this->getURI();
		// ex: http://yourdomain.com/controller/function/your/additional/uri?id=1
		// $this->getURI() will return an array with values -> ['your', 'additional', 'uri'];
		// the query string of the example URL can be obtained with $_GET['id'];
		echo 'hello this is IndexController::index';
		echo '<pre>';
		print_r($this->getURI());
	}

	// In the next method, the URL will look something like this:
	// http://yourdomain.com/index/test
	// where 'index' is the controller and 'test' is the method.
	// If a controller is not specified like http://yourdomain.com, IndexController, which was set as default
	// in the config.php file, is called.
	// Note that 'index' was set to use IndexController by default.
	// All other controllers you create must have filenames that are the same as its class name.
	// So if you create a controller named 'Home', you must save it in a file called Home.php;
	public function test() {
		// To instantiate your model class, use the method $this->model('model_name')
		$user = $this->model('User_model');
		$user->setUser('Norton');
		
		$data = array(
			'message' => 'This is the index testview file',
			'welcome' => 'Welcome ' . $user->getUser()
		);

		// load your view file using the $this->loadView() method
		// the first argument is the viewfile (without the extension) and the second is the data to pass
		$this->loadView('testview', $data);
	}
}
?>