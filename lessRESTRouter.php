<?php
use  jdchmiel\lessREST;
/**
 * This is effectively the controller for all ajax calls. skiny controller, fat model
 **/
class lessRESTRouter {

	public function __construct() {
		header('Access-Control-Allow-Origin: http://thecarwave.com');
		$method = $_SERVER['REQUEST_METHOD'];
		$urlParts = explode("/", trim(isset($_GET['apiStr']) ? $_GET['apiStr'] : "")); // from .htaccess rewrite

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$restHandler = \jdchmiel\lessREST\postFactory::build(array_shift($urlParts), $urlParts, $_POST);
			return $restHandler->process();
		} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$restHandler = \jdchmiel\lessREST\getFactory::build(array_shift($urlParts), $urlParts, $_GET);
			return $restHandler->process();
		} 
		$restHandler = new \jdchmiel\lessREST\baseError(501, 'HTTP method:' . $_SERVER['REQUEST_METHOD'] . ' is not implimented.');
		return $restHandler->process();
	}
}
