<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require 'controllers/app.php';
$controller = new App_Controller();
$result = $controller->all();
require 'views/app.php';
