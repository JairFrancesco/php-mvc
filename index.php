<!--
 * PHP MVC Boilerplate V1.0
 * Author: Rudem Labial
 *
 * Date: 2016-05-23
 * This application is free to use by anyone!
 -->
<?php
require_once('includes/config.php');

// load the controller defined in the URL
include $config->controllers_dir . $config->current_controller . '.php';

// create an instance
$c = new $config->current_controller($config);
?>