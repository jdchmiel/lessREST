<?php
namespace jdchmiel\lessREST\test;

class getTest extends \PHPUnit_Framework_TestCase {


	public function testSampleGetProcess() {
		$expected = "Payload: ";
		$actual = file_get_contents("http://lessrest.local/sampleget");



		$this->assertEquals($expected, $actual, "These should match when things are set up right.");

	}


}
