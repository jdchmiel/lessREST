<?php
namespace jdchmiel\lessREST;
class postFactory{
	public static function build(&$router) {
		$type = $router->config->PublishNamespace . "post\\" . strtolower($router->type);
		try {
			if (class_exists($type)) {
				$creatorObj = new $type($router);
			} else {
				$creatorObj = new baseError('400','Invalid POST endpoint');
			}
		} catch (exception $e) {
			$creatorObj = new baseError('400','Exeption - Invalid POST endpoint');
		}
		return $creatorObj;
	}
}
