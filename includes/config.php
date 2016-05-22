<?php
$config = new stdClass();

$config->base_url = 'http://localhost/php-mvc/';
$config->base_dir = '/Applications/XAMPP/xamppfiles/htdocs/php-mvc/';
$config->controllers_dir = '/Applications/XAMPP/xamppfiles/htdocs/php-mvc/controllers/';
$config->views_dir = '/Applications/XAMPP/xamppfiles/htdocs/php-mvc/views/';
$config->default_controller = 'IndexController';
$config->current_controller = (isset($_GET['cont']) && strtolower($_GET['cont']) != 'index') ? $_GET['cont'] : $config->default_controller;
$config->func = (isset($_GET['func']) AND $_GET['func']) ? $_GET['func'] : 'index';

?>