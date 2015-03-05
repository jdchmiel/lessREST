<?php
namespace  jdchmiel\lessREST;
class Config {

	protected $values = array(
		"marco" => "polo",
		"PublishNamespace" => "\\sample\\",
	);

	public function __get($key) {
		return $this->values[$key];
	}
}
