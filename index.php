<?php
require_once('includes/config.php');

// load the controller defined in the URL
include $config->controllers_dir . $config->current_controller . '.php';

// create an instance
$c = new $config->current_controller($config);
?>