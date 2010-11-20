<?php

/**
 * Address Standardization Solution, PHP Edition,
 * StateList() Usage Example
 *
 * @package AddressStandardizationSolution
 * @author Daniel Convissor <danielc@analysisandsolutions.com>
 * @copyright The Analysis and Solutions Company, 2001-2010
 * @link http://www.analysisandsolutions.com/software/addr/addr.htm
 */

/**
 * Require the auto loader
 *
 * Use dirname(__FILE__) because "./" can be stripped by PHP's safety
 * settings and __DIR__ was introduced in PHP 5.3.
 */
require dirname(__FILE__) . '/autoload.php';

$Address = new AddressStandardizationSolution;

?>
<html>
 <head>
  <title>Address Standardization Solution, PHP Edition, StateList() Usage Example</title>
 </head>
 <body>
  <form method="post">
<?php

if (empty($_POST['Input'])) {
	$Input = array('FL', 'AL', 'CA');
} else {
	$Input = $_POST['Input'];
}

$Address->StateList($Input, 'Input', 'Word', 'Abbr', 'cls', 'Y', '20');

?>
   <input type="submit" name="Submit" value="Test" />
  </form>
 </body>
</html>
