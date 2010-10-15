<?php

/**
 * Address Standardization Solution, PHP Edition,
 * StateList() Usage Example.
 *
 * @package AddressStandardizationSolution
 * @author Daniel Convissor <danielc@analysisandsolutions.com>
 * @copyright The Analysis and Solutions Company, 2001-2006
 * @version $Name: gitmove $ $Id: addr-tx_ex-list.php,v 5.4 2010-10-15 18:22:51 danielc Exp $
 * @link http://www.analysisandsolutions.com/software/addr/addr.htm
 */

/**
 * Require the main file.
 */
require './addr-tx.inc';
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
