<?php
namespace jdchmiel\lessREST\test;

class postTest extends \PHPUnit_Framework_TestCase {


	public function testSamplePostProcess() {
		$expected = "Payload: ";
		$actual = "Not right";

		$this->assertEquals($expected, $actual, "These should match when things are set up right.");

	}


}
