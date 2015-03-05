<?php
namespace  jdchmiel\lessREST;
class Config {

	private $values = array(
		"Redis" => array(),
		"TTL" => 60,
		"Log" => array(),
		"marco" => "polo",
		"PublishNamespace" => "\\sample\\",
	);

	public function __get($key) {
		return $this->values[$key];
	}
}
