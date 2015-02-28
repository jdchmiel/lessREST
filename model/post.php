<?php
namespace jdchmiel\lessREST;

class postFactory {
	public static function build($type, $params, $payload) {
		if (is_null($type) || is_null($params)) {
			return new baseError(400, 'Missing Params:<br> type:' . $type . '<br> params: ' . var_export($params, true));
		}
		$type = "\\jdchmiel\\lessREST\\post\\" . strtolower($type);
		try {
			$creatorObj = new $$type($params, $payload);
		} catch (exception $e) {
			$creatorObj = new baseError('400','Invalid endpoint');
		}
		return $creatorObj;
	}
	
}
