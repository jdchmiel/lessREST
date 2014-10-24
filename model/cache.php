<?php
/**
 * This cache class pretty much only exists in order to ease a transistion to memcache if I need to scale
 * as such, it is a single point to get and set cache entries, but is not developed past initial APC implementation
 **/




Class cache {

	public function get($key) {
		return apc_fetch($key);
	}

	public function set($key, $value) {
		return apc_store($key,$value);
	}

	public function __construct($type = 'APC') {
		if ($type <> 'APC') {
			die('Need to implement other cache types');
		}
	}




}
