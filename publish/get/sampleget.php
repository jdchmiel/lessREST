<?php
namespace jdchmiel\lessREST\get;

class sampleget {
	use \jdchmiel\lessREST\getTrait;

	
	public function process() {
		echo "Get Payload: " . var_export($this->payload, true);
	}
}
