<?php

class factories_creator {
	public function __construct($type, $params, $payload) {
		if (is_null($type) || is_null($params) {
			return new baseError(400,'Missing Params');
		}
		$creatorObj = null;
		$type = strtolower($type);
		switch($type) {
			case "alteration":
				$creatorObj = new creators_alteration($params);
				break;
			case "assembly":
				$creatorObj = new creators_assembly($params);
				break;
			case "attribute":
				$creatorObj = new creators_alteration($params);
				break;
			case "component":
				$creatorObj = new creators_component($params);
				break;
			case "relationship":
				$creatorObj = new creators_relation($params);
				break;
			case "user":
				$creatorObj = new creators_user($params);
				break;
			default:
				$creatorObj = new baseError('400','Invalid endpoint');
				break;
		}
		return $creatorObj;
	}
	

