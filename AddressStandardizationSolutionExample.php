<?php

/**
 * Address Standardization Solution, PHP Edition,
 * AddressLineStandardization() Usage Example
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
  <title>Address Standardization Solution, PHP Edition,
   AddressLineStandardization() Usage Example</title>
 </head>
 <body>
<?php

if (empty($_POST['Input'])) {
	$Input = 'One Main Street Suite 89';
} else {
	$Input = $_POST['Input'];
}

$Output = $Address->AddressLineStandardization($Input);

?>

  <form method="post">
   Input Address: <input type="text" name="Input" size="50"
       value="<?php echo htmlspecialchars($Input); ?>" />
   <input type="submit" name="Submit" value="Test" />
   <br />USPS Standard: <samp><?php echo htmlspecialchars($Output); ?></samp>
  </form>
 </body>
</html>
