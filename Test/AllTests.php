<?php /** @package AddressStandardizationSolution_Test */

/**#@+
 * Gather the test files in this directory
 */
require_once $GLOBALS['dir'] . '/AddressLineStandardizationTest.php';
require_once $GLOBALS['dir'] . '/PropertiesTest.php';
/**#@-*/


/**
 * Runs all Address Standardization Solution tests
 *
 * Usage:  phpunit AllTests
 *
 * @package AddressStandardizationSolution_Test
 */
class AllTests {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('Address Standardization Solution Unit Tests');

		$suite->addTestSuite('AddressLineStandardizationTest');
		$suite->addTestSuite('PropertiesTest');

		return $suite;
	}
}
