<?php
namespace sample\get;

class sampleget {
	use \jdchmiel\lessREST\getTrait; //this gives us $this-router which has all params and such

	public function process() {
		echo "Get Payload: " . var_export($this->router->urlParts, true);
		echo "<br> Marco is: " . $this->router->config->marco;
	}
}
