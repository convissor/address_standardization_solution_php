<?php

/**
 * Address Standardization Solution, PHP Edition.
 *
 * Requires PHP 5 or later.
 *
 * Address Standardization Solution is a trademark of The Analysis
 * and Solutions Company.
 *
 * @package AddressStandardizationSolution
 * @author Daniel Convissor <danielc@analysisandsolutions.com>
 * @copyright The Analysis and Solutions Company, 2001-2010
 * @license http://www.analysisandsolutions.com/software/license.htm Simple Public License
 * @link http://www.analysisandsolutions.com/software/addr/addr.htm
 */

/**
 * PHP's function that auto-magically includes files when classes
 * therein are instantiated
 */
function autoload_address_standardization($class) {
	static $path;

	if (!isset($path)) {
		$path = realpath(dirname(__FILE__));
	}

	if (strpos($class, 'Test') !== false) {
		include $path . '/Test/' . $class . '.php';
	} else {
		include $path . '/' . $class . '.php';
	}
}

spl_autoload_register('autoload_address_standardization');
