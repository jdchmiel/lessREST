<?php
/**
 * base class for the specific individual rest handlers 
 **/

abstract class base {
	abstract public function process(); // depending on writing or reading, will call save or load
	abstract public function __construct($params); //TODO can i do this to force params?



}
