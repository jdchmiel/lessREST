<?php
/**
 * This is effectively the controller for all ajax calls. skiny cntroller, fat model
 *
 *
 **/

include_once('model/const.php');
include_once('model/autoloader.php');

header('Access-Control-Allow-Origin: http://thecarwave.com');
$method = $_SERVER['REQUEST_METHOD'];
$urlParts = explode("/", trim($_GET['apiStr'])); // from .htaccess rewrite

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$restHandler = factories_creator::build(array_shift($urlParts), $urlParts, $_POST);
	return $restHandler->process();
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$readerType = array_shift($urlParts);
	$restHandler = factories_reader::build($readerType, $urlParts, $_GET);
	return $restHandler->process();
} 

$restHandler = new baseError(501, 'HTTP method:' . $_SERVER['REQUEST_METHOD'] . ' is not implimented.');
//die('request method not implimented');

