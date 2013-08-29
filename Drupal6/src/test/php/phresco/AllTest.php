<?php

/*	

Author by {phresco} QA Automation Team	

*/

require 'tests/NodeModules.php';
//require 'tests/TaxonomyModules.php';
class AllTest extends PHPUnit_Framework_TestSuite {


	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite = new AllTest();
		$testSuite->setName('DrupalAllTestSuite');
 		$testSuite->addTestSuite(NodeModules::suite());
		/* 
		$testSuite->addTestSuite('NodeModules'); */
		//$testSuite->addTestSuite('TaxonomyModules');
		return $testSuite;
	}
	protected function tearDown() {
	}
	
}  
?>
