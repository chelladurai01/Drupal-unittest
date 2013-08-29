
<?php
/*	

Author by {phresco} QA Automation Team	

*/

require 'Node.php';

class NodeModules extends PHPUnit_Framework_TestSuite {

	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite = new NodeModules();
		$testSuite->setName('NodeModules');
		$testSuite->addTestSuite('Node');
		return $testSuite;
	}
	protected function tearDown() {
	}

} 
?>