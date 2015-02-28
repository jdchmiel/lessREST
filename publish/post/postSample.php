<?php
namespace jdchmiel\lessREST;


class samplePost {
	use \jdchmiel\lessREST\postTrait;

	
	public function process() {
		echo "Payload: " . $this->payload;
	}
}
