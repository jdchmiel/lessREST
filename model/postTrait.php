<?php
namespace jdchmiel\lessREST;
/**
 * base class for the specific individual rest handlers 
 **/

trait postTrait {
	protected $params;
	protected $payload;
	abstract public function process(); // depending on writing or reading, will call save or load
	public function __construct($params, $payload) { //TODO can i do this to force params?
		$this->params = $params;
		$this->payload = $payload;
	}



}
