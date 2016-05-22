<?php
abstract class MainController 
{
	protected $uri_string = '';
	function __construct($config) {
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
	abstract public function index($args);

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
}
?>