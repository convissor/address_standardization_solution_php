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


	public function testDirectionalsReverseLookup() {
		foreach ($this->a->directionals as $key => $value) {
			if (substr($key, -2) == '-R') {
				$this->assertArrayHasKey($value, $this->a->directionals,
						"value of reverse key $key is missing");
				$this->assertEquals($this->a->directionals[$value], substr($key, 0, -2),
						"mapping back of $key does not match $value");
			} else {
				$this->assertArrayHasKey("$value-R", $this->a->directionals,
						"value of $key should map to a reverse key");
			}
		}
	}

	public function testIdentifiersReverseLookup() {
		foreach ($this->a->identifiers as $key => $value) {
			if (substr($key, -2) == '-R') {
				$this->assertArrayHasKey($value, $this->a->identifiers,
						"value of reverse key $key is missing");
				$this->assertEquals($this->a->identifiers[$value], substr($key, 0, -2),
						"mapping back of $key does not match $value");
			} else {
				$this->assertArrayHasKey("$value-R", $this->a->identifiers,
						"value of $key should map to a reverse key");
			}
		}
	}

	public function testSuffixesReverseLookup() {
		foreach ($this->a->suffixes as $key => $value) {
			if (substr($key, -2) == '-R') {
				$this->assertArrayHasKey($value, $this->a->suffixes,
						"value of reverse key $key is missing");
				$this->assertEquals($this->a->suffixes[$value], substr($key, 0, -2),
						"mapping back of $key does not match $value");
			} else {
				$this->assertArrayHasKey("$value-R", $this->a->suffixes,
						"value of $key should map to a reverse key");
			}
		}
	}
}
