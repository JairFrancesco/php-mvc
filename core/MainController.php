<?php
abstract class MainController 
{
	protected $uri_string = '';
	protected $config;

	function __construct($config) {
		$this->config = $config;
		$p = array();
		if ($config) {
			$p = $this->uriToArr($config->func);
			$this->uri_string = $p['query'];
			if ($p['function']) {
				$this->{$p['function']}();
			}
		}
	}

	// force extending class to define index()
	abstract public function index();

	// return the URI
	public function getURI() {
		return $this->uri_string;
	}

	public static function trimSlash($string) {
		if ($string) {
			if (substr($string, 0, 1) == '/') {
				$string = substr($string, 1);
			}

			if (substr($string, -1) == '/') {
				$string = substr($string, 0, -1);
			}
		}
		return $string;
	}

	// convert URIs to array
	protected function uriToArr($args) {
		$data = array(
			'function' => false,
			'query' => false
		);

		if ($args) {
			$args = $this->trimSlash($args);
			$x = explode("/", $args);
			$data['function'] = $x[0];

			if (count($x) > 1) {
				$data['query'] = array_slice($x, 1);
			}
		}

		return $data;
	}

	// this is the method to call when loading the view file
	protected function loadView($view_file, $data = array()) {
		$config = $this->config;
		include $this->config->views_dir . $view_file . '.php'; 
	}

	// this is the method to call to load the model
	protected function model($model_name) {
		$file = $this->config->models_dir . $model_name . '.php';
		
		require_once($file);
		return new $model_name();
	}
}
?>