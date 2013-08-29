<?php


require 'tests/NodeModules.php';
require 'tests/TaxonomyModules.php';
require 'tests/UserRoleModules.php';

class AllTest extends PHPUnit_Framework_TestSuite {

	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite = new AllTest();
		$testSuite->setName('PHPUnit TestCases');
 		$testSuite->addTestSuite(NodeModules::suite());
		$testSuite->addTestSuite(TaxonomyModules::suite());
		$testSuite->addTestSuite(UserRoleModules::suite());
		return $testSuite;
	}
	protected function tearDown() {
	}

} 

