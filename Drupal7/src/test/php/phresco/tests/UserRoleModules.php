<?php
/*	

Author by {phresco} QA Automation Team	

*/

require 'UserRole.php';

class UserRoleModules extends PHPUnit_Framework_TestSuite {

	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite= new UserRoleModules();
		$testSuite->setName('UserRoleModules');
		$testSuite->addTestSuite('UserRole');
		return $testSuite;
	}
	protected function tearDown() {
	}

} 
?>