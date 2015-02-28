<?php
namespace jdchmiel\lessREST;
class getFactory{
	public static function build($type, $params, $payload) {
		if (is_null($type) || $type === "" ||  is_null($params)) {
			return new \jdchmiel\lessREST\baseError(400, 'Missing Params:<br> type:' . $type . '<br> params: ' . var_export($params, true));
		}
		$type = "jdchmiel\\lessREST\\get\\" . strtolower($type);
		try {
			if (class_exists($type)) {
				$creatorObj = new $type($params, $payload);
			} else {
				$creatorObj = new baseError('400','Invalid endpoint');
			}
		} catch (exception $e) {
			$creatorObj = new baseError('400','Exception - Invalid endpoint');
		}
		return $creatorObj;
	}
}
	

