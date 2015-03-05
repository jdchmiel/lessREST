<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require "vendor/autoload.php";
require "lessRESTRouter.php";
$config = new \jdchmiel\lessREST\Config();
$app = new \jdchmiel\lessREST\lessRESTRouter($config);
