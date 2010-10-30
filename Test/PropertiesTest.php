<?php /** @package AddressStandardizationSolution_Test */

/**
 * Gather the class these tests work on
 */
require_once $GLOBALS['dir'] . '/../addr-tx.inc';


/**
 * Tests properties in the AddressStandardizationSolution class
 *
 * Usage:  phpunit Properties
 *
 * @package AddressStandardizationSolution_Test
 */
class PropertiesTest extends PHPUnit_Framework_TestCase {
	/**
	 * @var AddressStandardizationSolution
	 */
	protected $a;


	/**
	 * PHPUnit's method for setting needed properties, etc
	 */
	protected function setUp() {
		$this->a = new AddressStandardizationSolution;
	}

	/**
	 * Helper function that examines the given properties
	 *
	 * @param array $property  the array to test
	 *
	 * @return void
	 */
	protected function t($property) {
		foreach ($property as $key => $value) {
			if (substr($key, -2) == '-R') {
				$this->assertArrayHasKey($value, $property,
						"value of reverse key $key is missing");
				$this->assertEquals($property[$value], substr($key, 0, -2),
						"mapping back of $key does not match $value");
			} else {
				$this->assertArrayHasKey("$value-R", $property,
						"value of $key should map to a reverse key");
			}
		}
	}


	public function testDirectionalsReverseLookup() {
		$this->t($this->a->directionals);
	}

	public function testIdentifiersReverseLookup() {
		$this->t($this->a->identifiers);
	}

	public function testSuffixesReverseLookup() {
		$this->t($this->a->suffixes);
	}
}
