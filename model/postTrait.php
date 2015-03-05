<?php
namespace jdchmiel\lessREST;
/**
 * base class for the specific individual rest handlers 
 **/

trait postTrait {
	protected $router;
	abstract public function process(); // depending on writing or reading, will call save or load
	public function __construct(&$router) {
		$this->router = $router;
	}



}
