<?php
namespace sample\post;

class samplepost {
	use \jdchmiel\lessREST\postTrait;

	public function process() {
		echo "POST Params: " . var_export($this->router->urlParts, true);
	}
}
