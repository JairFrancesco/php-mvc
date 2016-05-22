<?php
class MainController 
{
	private args = [];
	public function __construct() {
		
	}

	public static function trimSlash($string = false) {
		$new_string = '';
		if ($string) {
			$pattern = '^\/(.*)\/$';
			$new_string = preg_replace($pattern, ${1}, $string);
		}

		return $new_string;
	}

	// convert URIs to array
	protected function uriToArr($args) {
		$args = $this->trimSlash($args);
		return explode("/", $args);
	}
}
?>