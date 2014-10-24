<?php

class factories_reader{
	public static function build($type, $params) {
		if (is_null($type) || is_null($params)) {
			return new baseError(400, 'Missing Params:<br> type:' . $type . '<br> params: ' . var_export($params, true));
		}
		$creatorObj = null;
		$type = strtolower($type);
		switch ($type) {
			case "alteration":
				$creatorObj = new readers_alteration($params);
				break;
			case "assembly":
				$creatorObj = new readers_assembly($params);
				break;
			case "attribute":
				$creatorObj = new readers_alteration($params);
				break;
			case "component":
				$creatorObj = new readers_component($params);
				break;
			case "componenttype":
				$creatorObj = new readers_componentType($params);
				break;
			case "relationship":
				$creatorObj = new readers_relation($params);
				break;
			case "user":
				$creatorObj = new readers_user($params);
				break;
			default:
				$creatorObj = new baseError('400', $type . ' is an invalid endpoint');
				break;
		}
		return $creatorObj;
	}
}
	

