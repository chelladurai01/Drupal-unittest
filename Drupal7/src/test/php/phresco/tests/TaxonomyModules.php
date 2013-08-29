
<?php
/*	

Author by {phresco} QA Automation Team	

*/

require 'Taxonomy.php';


class TaxonomyModules extends PHPUnit_Framework_TestSuite {

	protected function setUp() {
	}

	public static function suite()
	{
		$testSuite = new TaxonomyModules();
		$testSuite->setName('TaxonomyModules');
		$testSuite->addTestSuite('Taxonomy');
		return $testSuite;
	}
	protected function tearDown() {
	}

} 
?>