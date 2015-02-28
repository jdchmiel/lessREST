<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require "vendor/autoload.php";
require "lessRESTRouter.php";
//$app = new jdchmiel\lessREST\lessREST();
//$app = new \jdchmiel\lessREST\lessREST();
$app = new lessRESTRouter();
