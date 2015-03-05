<?php
namespace  jdchmiel\lessREST;

/**
 * This is effectively the controller for all ajax calls. skiny controller, fat model
 **/

class lessRESTRouter {

	private $config;
	private $method;
	private $type;
	private $urlParts;

	public function __construct(&$config) {
		$this->config = $config;
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->urlParts = explode("/", trim(isset($_GET['apiStr']) ? $_GET['apiStr'] : "")); // from .htaccess rewrite
		$this->type = array_shift($this->urlParts);

		header('Access-Control-Allow-Origin: http://thecarwave.com');
		if (is_null($this->type) || $this->type === "") {
			$restHandler = new baseError(400, 'Missing Params:<br> type:' . $this->type . '<br> params: ' . var_export($this->urlParts, true));
		} else if ($this->method == 'POST') {
			$restHandler = postFactory::build($this);
		} else if ($this->method == 'GET') {
			$restHandler = getFactory::build($this);
		} else {
			$restHandler = new baseError(501, 'HTTP method:' . $this->method . ' is not implimented.');
		}
		return $restHandler->process();
	}

	public function __get($key) {
		return $this->$key;
	}

}
