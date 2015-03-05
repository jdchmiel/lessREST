<?php
namespace jdchmiel\lessREST;
class getFactory{
	public static function build(&$router) {
		$type = $router->config->PublishNamespace . "get\\" . strtolower($router->type);
		try {
			if (class_exists($type)) {
				$creatorObj = new $type($router);
			} else {
				$creatorObj = new baseError('400','Invalid GET endpoint');
			}
		} catch (exception $e) {
			$creatorObj = new baseError('400','Exception - Invalid GET endpoint');
		}
		return $creatorObj;
	}
}
