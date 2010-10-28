<?php /** @package AddressStandardizationSolution_Test */

/**
 * Gather the class these tests work on
 */
require_once $GLOBALS['dir'] . '/../addr-tx.inc';


/**
 * Tests the address line standardization method
 *
 * Usage:  phpunit AddressLineStandardization
 *
 * @package AddressStandardizationSolution_Test
 */
class AddressLineStandardizationTest extends PHPUnit_Framework_TestCase {
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
	 * Runs the given address through the AddressLineStandardization method
	 *
	 * @param string $address  the address to standardize
	 *
	 * @return string  the standardized address
	 */
	protected function t($address) {
		return $this->a->AddressLineStandardization($address);
	}


	public function test010000() {
		$this->assertEquals('842 31ST ST',
			$this->t('842 31 STREET'));
	}
	public function test100000() {
		$this->assertEquals('842 32ND ST',
			$this->t('842 32 STREET'));
	}
	public function test200000() {
		$this->assertEquals('842 33RD ST',
			$this->t('842 33 STREET'));
	}
	public function test300000() {
		$this->assertEquals('842 34TH ST',
			$this->t('842 34 STREET'));
	}
	public function test400000() {
		$this->assertEquals('842 11TH ST',
			$this->t('842 11 STREET'));
	}
	public function test500000() {
		$this->assertEquals('842 12TH ST',
			$this->t('842 12 STREET'));
	}
	public function test600000() {
		$this->assertEquals('842 13TH ST',
			$this->t('842 13 STREET'));
	}
	public function test700000() {
		$this->assertEquals('842 14TH ST',
			$this->t('842 14 STREET'));
	}
	public function test900000() {
		$this->assertEquals('842 E 1700 S',
			$this->t('842 East 1700 South'));
	}
	public function test1000000() {
		$this->assertEquals('55 39.2 RD',
			$this->t('55 39.2 RD'));
	}
	public function test1100000() {
		$this->assertEquals('101 1/2 MAIN ST',
			$this->t('101 1/2 MAIN		ST'));
	}
	public function test1200000() {
		$this->assertEquals('101 1/2 MAIN ST',
			$this->t('101 1/2 MAIN  ST'));
	}
	public function test1300000() {
		$this->assertEquals('11 1/2 MAIN ST',
			$this->t('Eleven 1/2 MAIN ST.'));
	}
	public function test1400000() {
		$this->assertEquals('2 1/2 42ND ST',
			$this->t('2 1/2 42 ST.'));
	}
	public function test1500000() {
		$this->assertEquals('3 2ND ST',
			$this->t('3 2 ST.'));
	}
	public function test1800000() {
		$this->assertEquals('1 MID ISLAND PLZ',
			$this->t('1 MID-ISLAND PLaza'));
	}
	public function test1900000() {
		$this->assertEquals('289-01 MONTGOMERY AVE',
			$this->t('289-01 MONTGOMERY AVEnue'));
	}
	public function test2000000() {
		$this->assertEquals('1 MID ISLAND PLZ APT 36D',
			$this->t('1 MID-ISLAND PLaza APT 36-D'));
	}
	public function test2100000() {
		$this->assertEquals('1 MID ISLAND PLZ APT D36',
			$this->t('1 MID-ISLAND PLaza APT D-36'));
	}
	public function test2200000() {
		$this->assertEquals('1 1/2 MID ISLAND PLZ APT D36',
			$this->t('1 1/2 MID-ISLAND PLaza APT D-36'));
	}
	public function test3000000() {
		$this->assertEquals('1 7TH AVE STE 33',
			$this->t('1 7 av /suite 33'));
	}
	public function test3100000() {
		$this->assertEquals('1 7TH AVE STE 33',
			$this->t('1 7 av -- suite 33'));
	}
	public function test3200000() {
		$this->assertEquals('1 7TH AVE STE 33',
			$this->t('1 7 av - suite 33'));
	}
	public function test3300000() {
		$this->assertEquals('1 7TH AVE # 33',
			$this->t('1 7 av - #33'));
	}
	public function test3400000() {
		$this->assertEquals('1 7TH AVE APT 33',
			$this->t('1 7 av /APT#33'));
	}
	public function test3500000() {
		$this->assertEquals('1 7TH AVE APT 33',
			$this->t('1 7 av / APT#33'));
	}
	public function test3700000() {
		$this->assertEquals('1 N BAY ST',
			$this->t('1 NORTH BAY ST'));
	}
	public function test3800000() {
		$this->assertEquals('1 E END AVE',
			$this->t('1 EAST END AVE'));
	}
	public function test3900000() {
		$this->assertEquals('1 BAY DR W',
			$this->t('1 BAY DRIVE WEST'));
	}
	public function test4100000() {
		$this->assertEquals('1 N SOUTH OAK ST',
			$this->t('1 NORTH SOUTH OAK ST'));
	}
	public function test4200000() {
		$this->assertEquals('2 1/2 N SOUTH OAK ST FL 8',
			$this->t('2 1/2 NORTH SOUTH OAK ST 8fl'));
	}
	public function test4300000() {
		$this->assertEquals('3 NE MAIN ST',
			$this->t('3 NORTH EAST MAIN ST'));
	}
	public function test4400000() {
		$this->assertEquals('1 1/2 NE MAIN ST',
			$this->t('1 1/2 NORTH EAST MAIN ST'));
	}
	public function test4500000() {
		$this->assertEquals('1 MAPLE COURT EAST W',
			$this->t('1 MAPLE CourT EAST WEST'));
	}
	public function test4600000() {
		$this->assertEquals('9 MAPLE COURT EAST W OFC A',
			$this->t('9 MAPLE CourT EAST WEST ofc a'));
	}
	public function test4700000() {
		$this->assertEquals('1 BAY AVE SW',
			$this->t('1 BAY AVE SOUTHWEST'));
	}
	public function test4800000() {
		$this->assertEquals('2 BAY AVE SW APT 99',
			$this->t('2 BAY AVE SOUTHWEST apt. 99'));
	}
	public function test4900000() {
		$this->assertEquals('1 COUNTY ROAD N E',
			$this->t('1 COUNTY ROAD N EAST'));
	}
	public function test5000000() {
		$this->assertEquals('1 COUNTY ROAD N E',
			$this->t('1 COUNTY RD N EAST'));
	}
	public function test5100000() {
		$this->assertEquals('1 COUNTY ROAD N E FL 13',
			$this->t('1 COUNTY RD N EAST floor 13'));
	}
	public function test5400000() {
		$this->assertEquals('1 FOGEL AVE',
			$this->t('1 FOGEL AVEnue'));
	}
	public function test5500000() {
		$this->assertEquals('1 1/2 FOGEL AVE',
			$this->t('1 1/2 FOGEL AVEnue'));
	}
	public function test5600000() {
		$this->assertEquals('1 1/2 FOGEL AVE STE 33',
			$this->t('1 1/2 FOGEL AVEnue suite 33'));
	}
	public function test6000000() {
		$this->assertEquals('1000 AVENUE E',
			$this->t('1000 AVENUE E'));
	}
	public function test6100000() {
		$this->assertEquals('103 AVENUE E',
			$this->t('103 AVE E'));
	}
	public function test6200000() {
		$this->assertEquals('103 1/2 AVENUE E',
			$this->t('103 1/2 AVE E'));
	}
	public function test6300000() {
		$this->assertEquals('1000 AVENUE E',
			$this->t('1000 AV E'));
	}
	public function test6400000() {
		$this->assertEquals('1000 1/2 AVENUE E',
			$this->t('1000 1/2 AV E'));
	}
	public function test6500000() {
		$this->assertEquals('10 AVENUE E FL 10',
			$this->t('10 AV E 10 fl'));
	}
	public function test6600000() {
		$this->assertEquals('300 AVENUE E # 10',
			$this->t('300 AV E #10'));
	}
	public function test6700000() {
		$this->assertEquals('300 1/2 AVENUE E # 10',
			$this->t('300 1/2 AV E #10'));
	}
	public function test6800000() {
		$this->assertEquals('2 COURT ST',
			$this->t('Two Court St'));
	}
	public function test7000000() {
		$this->assertEquals('1 RANCH ROAD 620',
			$this->t('1 RANCH RD 620'));
	}
	public function test7100000() {
		$this->assertEquals('1 RANCH ROAD 620',
			$this->t('1 RANCH RD #620'));
	}
	public function test7200000() {
		$this->assertEquals('1 RANCH ROAD 620',
			$this->t('1 RANCH RD no 620'));
	}
	public function test7300000() {
		$this->assertEquals('1 RANCH ROAD 620X',
			$this->t('1 RANCH RD 620X'));
	}
	public function test7400000() {
		$this->assertEquals('1 RANCH ROAD 620X # 55',
			$this->t('1 RANCH RD 620X #55'));
	}
	public function test7500000() {
		$this->assertEquals('1 RANCH ROAD 620Y STE 9',
			$this->t('1 RANCH RD 620Y suite 9'));
	}
	public function test7600000() {
		$this->assertEquals('1 1/2 RANCH ROAD 620X',
			$this->t('1 1/2 RANCH RD 620X'));
	}
	public function test7700000() {
		$this->assertEquals('1 RANCH ROAD 620X',
			$this->t('1 RANCH RD #620X'));
	}
	public function test7800000() {
		$this->assertEquals('1 RANCH ROAD 620X',
			$this->t('1 RANCH RD no. 620X'));
	}
	public function test7900000() {
		$this->assertEquals('1 RANCH ROAD 620 W APT 33',
			$this->t('1 RANCH RD 620 west apt 33'));
	}
	public function test8000000() {
		$this->assertEquals('1 BRANCH RD # 620',
			$this->t('1 BRANCH RD #620'));
	}
	public function test8100000() {
		$this->assertEquals('1 RANCH RD APT 2',
			$this->t('1 RANCH Road apt 2'));
	}
	public function test8200000() {
		$this->assertEquals('5 RANCH RD APT 3',
			$this->t('5 RANCH Road apt #3'));
	}
	public function test8600000() {
		$this->assertEquals('RR 2 BOX 152',
			$this->t('RR 2 BOX 152'));
	}
	public function test8610000() {
		$this->assertEquals('RR 1 BOX 218',
			$this->t('Box 218 RR 1'));
	}
	public function test8620000() {
		$this->assertEquals('RR 1 BOX 218',
			$this->t('Box 218 RR 1 SMITHFIELD FARM'));
	}
	public function test8700000() {
		$this->assertEquals('RR 2 BOX 152',
			$this->t('Rural Route 2 BOX 152'));
	}
	public function test8710000() {
		$this->assertEquals('RR 2 BOX 152',
			$this->t('Rural Rte 2 BOX 152'));
	}
	public function test8800000() {
		$this->assertEquals('RR 4 BOX 87A',
			$this->t('RFD ROUTE 4 #87A'));
	}
	public function test8900000() {
		$this->assertEquals('RR 4 BOX 87A',
			$this->t('RD ROUTE 4 #87A'));
	}
	public function test8910000() {
		$this->assertEquals('RR 4 BOX 87A',
			$this->t('RD RT 4 #87A'));
	}
	public function test9000000() {
		$this->assertEquals('RR 2 BOX 18',
			$this->t('RR 2 BOX 18 BRYAN DAIRY RD'));
	}
	public function test9200000() {
		$this->assertEquals('1 COUNTY HIGHWAY 140 FL 10',
			$this->t('1 COUNTY HIGHWAY 140 10floor'));
	}
	public function test9300000() {
		$this->assertEquals('2 COUNTY HWY RM 62',
			$this->t('2 COUNTY HIGHWAY room 62'));
	}
	public function test9400000() {
		$this->assertEquals('3 COUNTY HWY RM 63',
			$this->t('3 COUNTY HIGHWAY room #63'));
	}
	public function test9500000() {
		$this->assertEquals('4 1/2 COUNTY HWY RM 64',
			$this->t('4 1/2 COUNTY HIGHWAY room # 64'));
	}
	public function test9600000() {
		$this->assertEquals('2 COUNTY HIGHWAY 120 FL 10',
			$this->t('2 COUNTY HIGHWAY 120 floor 10'));
	}
	public function test9700000() {
		$this->assertEquals('3 COUNTY HIGHWAY 130 FL 10',
			$this->t('3 COUNTY HIGHWAY 130 10 fl'));
	}
	public function test9800000() {
		$this->assertEquals('3 COUNTY HIGHWAY 130 # 10',
			$this->t('3 COUNTY HIGHWAY 130 #10'));
	}
	public function test9900000() {
		$this->assertEquals('3 COUNTY HIGHWAY 130 RM 10',
			$this->t('3 COUNTY HIGHWAY 130 room #10'));
	}
	public function test10100000() {
		$this->assertEquals('4 COUNTY HIGHWAY 120 E FL 10',
			$this->t('4 COUNTY HIGHWAY 120 east floor 10'));
	}
	public function test10200000() {
		$this->assertEquals('1 COUNTY HIGHWAY 60E',
			$this->t('1 COUNTY HWY 60E'));
	}
	public function test10300000() {
		$this->assertEquals('4 COUNTY HIGHWAY 60W',
			$this->t('4 COUNTY HWY #60W'));
	}
	public function test10400000() {
		$this->assertEquals('4 COUNTY HIGHWAY 50S',
			$this->t('4 COUNTY HWY no. 50S'));
	}
	public function test10500000() {
		$this->assertEquals('1 WV COUNTY HIGHWAY 60E',
			$this->t('1 west virginia COUNTY HWY 60E'));
	}
	public function test10600000() {
		$this->assertEquals('1 CT COUNTY HIGHWAY 60E',
			$this->t('1 Connecticut County Hwy 60E'));
	}
	public function test10601000() {
		$this->assertEquals('1 CT COUNTY HIGHWAY 60E',
			$this->t('1 CT County Hwy 60E'));
	}
	public function test10700000() {
		$this->assertEquals('1 BLUE COUNTY HIGHWAY 60E',
			$this->t('1 blue COUNTY HWY 60E'));
	}
	public function test10800000() {
		$this->assertEquals('1 COUNTY HIGHWAY 20',
			$this->t('1 CNTY HWY 20'));
	}
	public function test10900000() {
		$this->assertEquals('22 COUNTY HIGHWAY 20 STE 33',
			$this->t('22 CNTY HWY 20 Suite 33'));
	}
	public function test11000000() {
		$this->assertEquals('4A COUNTY HIGHWAY 20 STE 33',
			$this->t('4A CNTY HWY 20 Suite #33'));
	}
	public function test11100000() {
		$this->assertEquals('55-32 COUNTY HIGHWAY 20A E APT 33',
			$this->t('55-32 CNTY HWY 20A East apt. 33'));
	}
	public function test11200000() {
		$this->assertEquals('1 COUNTY HIGHWAY 9W',
			$this->t('One CNTY HWY 9W'));
	}
	public function test11300000() {
		$this->assertEquals('33 1/2 COUNTY HIGHWAY 9',
			$this->t('33 1/2 CNTY HWY 9'));
	}
	public function test11700000() {
		$this->assertEquals('15523 DAWN CRST',
			$this->t('15523 Dawn Crest'));
	}
	public function test11800000() {
		$this->assertEquals('1 COUNTY ROAD 110',
			$this->t('1 COUNTY ROAD 110'));
	}
	public function test11900000() {
		$this->assertEquals('1 COUNTY RD STE 110',
			$this->t('1 COUNTY ROAD suite 110'));
	}
	public function test12000000() {
		$this->assertEquals('1 COUNTY RD STE 110',
			$this->t('1 COUNTY ROAD suite #110'));
	}
	public function test12100000() {
		$this->assertEquals('1 COUNTY ROAD 441',
			$this->t('1 COUNTY RD 441'));
	}
	public function test12200000() {
		$this->assertEquals('1 COUNTY ROAD 441',
			$this->t('1 COUNTY RD #441'));
	}
	public function test12300000() {
		$this->assertEquals('1 COUNTY ROAD 441',
			$this->t('1 COUNTY RD no 441'));
	}
	public function test12400000() {
		$this->assertEquals('1 1/2 COUNTY ROAD 441',
			$this->t('1 1/2 COUNTY RD 441'));
	}
	public function test12500000() {
		$this->assertEquals('1 COUNTY ROAD 1185',
			$this->t('1 CR 1185'));
	}
	public function test12600000() {
		$this->assertEquals('1 COUNTY ROAD 33',
			$this->t('1 CNTY RD 33'));
	}
	public function test12700000() {
		$this->assertEquals('1 COUNTY ROAD 33 FL 8',
			$this->t('1 CNTY RD 33 8 FL'));
	}
	public function test12800000() {
		$this->assertEquals('1 CA COUNTY ROAD 150',
			$this->t('1 CA COUNTY RD 150'));
	}
	public function test12900000() {
		$this->assertEquals('1 CA COUNTY ROAD X APT 150',
			$this->t('1 CA COUNTY RD X apt 150'));
	}
	public function test13000000() {
		$this->assertEquals('1 CA COUNTY ROAD X # 150',
			$this->t('1 CA COUNTY RD X #150'));
	}
	public function test13100000() {
		$this->assertEquals('1 CA COUNTY ROAD 2 # 150',
			$this->t('1 CA COUNTY RD 2 #150'));
	}
	public function test13200000() {
		$this->assertEquals('1 CA COUNTY ROAD X APT 150',
			$this->t('1 CA COUNTY RD X apt #150'));
	}
	public function test13300000() {
		$this->assertEquals('1 CA COUNTY ROAD 555',
			$this->t('1 CALIFORNIA COUNTY ROAD 555'));
	}
	public function test13400000() {
		$this->assertEquals('1 3/4 CA COUNTY ROAD 555',
			$this->t('1 3/4 CALIFORNIA COUNTY ROAD 555'));
	}
	public function test13700000() {
		$this->assertEquals('1 COUNTY ROAD N E',
			$this->t('1 COUNTY ROAD N EAST'));
	}
	public function test13800000() {
		$this->assertEquals('1 COUNTY ROAD N E',
			$this->t('1 COUNTY RD N EAST'));
	}
	public function test13900000() {
		$this->assertEquals('5 5/8 COUNTY ROAD N E',
			$this->t('5 5/8 COUNTY RD N EAST'));
	}
	public function test14000000() {
		$this->assertEquals('1 COUNTY ROAD N E FL 13',
			$this->t('1 COUNTY RD N EAST floor 13'));
	}
	public function test14100000() {
		$this->assertEquals('1 MI COUNTY ROAD N E FL 13',
			$this->t('1 michigan COUNTY RD N EAST floor 13'));
	}
	public function test14200000() {
		$this->assertEquals('1 9/9 COUNTY ROAD N E FL 13',
			$this->t('1 9/9 COUNTY RD N EAST floor 13'));
	}
	public function test14500000() {
		$this->assertEquals('1 STATE ROAD 220',
			$this->t('1 SR 220'));
	}
	public function test14600000() {
		$this->assertEquals('1 STATE ROAD 55',
			$this->t('1 STATE ROAD 55'));
	}
	public function test14700000() {
		$this->assertEquals('1 STATE ROAD 86',
			$this->t('1 ST RD 86'));
	}
	public function test14800000() {
		$this->assertEquals('1 NY STATE ROAD 86',
			$this->t('1 New York SR #86'));
	}
	public function test14900000() {
		$this->assertEquals('1 NJ STATE ROAD 86',
			$this->t('1 New Jersey ST RD 86'));
	}
	public function test15000000() {
		$this->assertEquals('5 NJ STATE RD APT 86',
			$this->t('5 New Jersey ST RD apt 86'));
	}
	public function test15100000() {
		$this->assertEquals('1 NJ STATE ROAD 86 RM 89',
			$this->t('1 New Jersey ST RD 86 room 89'));
	}
	public function test15110000() {
		$this->assertEquals('1 FL STATE ROAD 86',
			$this->t('1 Florida ST RD 86'));
	}
	public function test15111000() {
		$this->assertEquals('1 FL STATE ROAD 86',
			$this->t('1 FL state Road 86'));
	}
	public function test15112000() {
		$this->assertEquals('1 FL STATE ROAD 86',
			$this->t('1 FL ST RD 86'));
	}
	public function test15120000() {
		$this->assertEquals('1 CT STATE ROAD 86',
			$this->t('1 Connecticut ST RD 86'));
	}
	public function test15121000() {
		$this->assertEquals('1 CT STATE ROAD 86',
			$this->t('1 CT state Road 86'));
	}
	public function test15122000() {
		$this->assertEquals('1 CT STATE ROAD 86',
			$this->t('1 CT ST RD 86'));
	}
	public function test15200000() {
		$this->assertEquals('1 1/2 NJ STATE ROAD 86 RM 89',
			$this->t('1 1/2 New Jersey ST RD 86 room 89'));
	}
	public function test15300000() {
		$this->assertEquals('1 MS STATE ROAD 86 W FL 34',
			$this->t('1 MS ST RD 86 W 34 FLOOR'));
	}
	public function test15600000() {
		$this->assertEquals('1 STATE ROUTE 260',
			$this->t('1 STATE RouTE 260'));
	}
	public function test15700000() {
		$this->assertEquals('1 STATE ROUTE 175',
			$this->t('1 ST RT 175'));
	}
	public function test15800000() {
		$this->assertEquals('1 OR STATE ROUTE 175',
			$this->t('1 OR ST RT 175'));
	}
	public function test15900000() {
		$this->assertEquals('1 1/3 OR STATE ROUTE 175',
			$this->t('1 1/3 ORegon ST RT 175'));
	}
	public function test16000000() {
		$this->assertEquals('1 STATE ROUTE 17',
			$this->t('1 ST ROUTE 17'));
	}
	public function test16023000() {
		$this->assertEquals('1 STATE ROUTE 260 STE 33',
			$this->t('1 STATE RouTE 260 suite #33'));
	}
	public function test16024000() {
		$this->assertEquals('1 STATE ROUTE 260 STE 33',
			$this->t('1 STATE RouTE 260 /suite 33'));
	}
	public function test16025000() {
		$this->assertEquals('1 STATE ROUTE 260 STE 33',
			$this->t('1 STATE RouTE 260 -- suite 33'));
	}
	public function test16026000() {
		$this->assertEquals('1 STATE ROUTE 260 STE 33',
			$this->t('1 STATE RouTE 260 - suite 33'));
	}
	public function test16027000() {
		$this->assertEquals('1 STATE ROUTE 260 # 33',
			$this->t('1 STATE RouTE 260 - #33'));
	}
	public function test16028000() {
		$this->assertEquals('1 STATE ROUTE 260 APT 33',
			$this->t('1 STATE RouTE 260 /APT#33'));
	}
	public function test16029000() {
		$this->assertEquals('1 STATE ROUTE 260 APT 33',
			$this->t('1 STATE RouTE 260 / APT#33'));
	}
	public function test16100000() {
		$this->assertEquals('1 STATE ROUTE 22',
			$this->t('1 ST Rte 22'));
	}
	public function test16200000() {
		$this->assertEquals('1 STATE ROUTE 22',
			$this->t('1 ST Rte #22'));
	}
	public function test16300000() {
		$this->assertEquals('1 STATE ROUTE 22',
			$this->t('1 ST Rte no 22'));
	}
	public function test16400000() {
		$this->assertEquals('1 STATE RTE APT 22',
			$this->t('1 ST Rte apartment 22'));
	}
	public function test16500000() {
		$this->assertEquals('1 STATE ROUTE 260 E RM 33',
			$this->t('1 STATE RTE 260 east room #33'));
	}
	public function test16600000() {
		$this->assertEquals('1 3/5 STATE ROUTE 260 E RM 33',
			$this->t('1 3/5 STATE RTE 260 east room #33'));
	}
	public function test17000000() {
		$this->assertEquals('1 INTERSTATE 10',
			$this->t('1 I10'));
	}
	public function test17100000() {
		$this->assertEquals('1 INTERSTATE 40',
			$this->t('1 INTERSTATE 40'));
	}
	public function test17200000() {
		$this->assertEquals('1 INTERSTATE 280',
			$this->t('1 IH280'));
	}
	public function test17300000() {
		$this->assertEquals('1 INTERSTATE 680',
			$this->t('1 INTERSTATE HWY 680'));
	}
	public function test17400000() {
		$this->assertEquals('1 1/2 INTERSTATE 680',
			$this->t('1 1/2 INTERSTATE HWY 680'));
	}
	public function test17500000() {
		$this->assertEquals('1 INTERSTATE 55 BYP',
			$this->t('1 I 55 BYPASS'));
	}
	public function test17600000() {
		$this->assertEquals('1 INTERSTATE 26 BYPASS RD',
			$this->t('1 I 26 BYP ROAD'));
	}
	public function test17700000() {
		$this->assertEquals('1 INTERSTATE 26 BYPASS RD',
			$this->t('1 I 26 BYPASS ROAD'));
	}
	public function test17800000() {
		$this->assertEquals('1 INTERSTATE 44 FRONTAGE RD',
			$this->t('1 I 44 FRONTAGE ROAD'));
	}
	public function test17900000() {
		$this->assertEquals('1 INTERSTATE 44 FRONTAGE RD STE 4',
			$this->t('1 I 44 FRONTAGE ROAD suite 4'));
	}
	public function test18000000() {
		$this->assertEquals('55 1/5 INTERSTATE 44 FRONTAGE RD STE 4',
			$this->t('55 1/5 I 44 FRONTAGE ROAD suite 4'));
	}
	public function test18300000() {
		$this->assertEquals('1 STATE HIGHWAY 303',
			$this->t('1 ST HIGHWAY 303'));
	}
	public function test18400000() {
		$this->assertEquals('1 MI STATE HIGHWAY 303',
			$this->t('1 Michigan ST HIGHWAY 303'));
	}
	public function test18500000() {
		$this->assertEquals('1 MI STATE HIGHWAY 303 # 405',
			$this->t('1 Michigan ST HIGHWAY 303 #405'));
	}
	public function test18600000() {
		$this->assertEquals('1 MI STATE HIGHWAY 303',
			$this->t('1 Michigan STATE HIGHWAY #303'));
	}
	public function test18700000() {
		$this->assertEquals('1 STATE HWY RM 303',
			$this->t('1 ST HIGHWAY rm 303'));
	}
	public function test18800000() {
		$this->assertEquals('1 MD STATE HWY RM 303',
			$this->t('1 Maryland ST HIGHWAY rm 303'));
	}
	public function test18900000() {
		$this->assertEquals('1 STATE HIGHWAY 60',
			$this->t('1 STATE HWY 60'));
	}
	public function test19000000() {
		$this->assertEquals('2 1/2 STATE HWY RM 303',
			$this->t('2 1/2 ST HIGHWAY rm 303'));
	}
	public function test19100000() {
		$this->assertEquals('3 1/4 STATE HIGHWAY 60',
			$this->t('3 1/4 STATE HWY 60'));
	}
	public function test19300000() {
		$this->assertEquals('3 1/4 STATE HIGHWAY 60 E',
			$this->t('3 1/4 STATE HWY 60 E'));
	}
	public function test19500000() {
		$this->assertEquals('1 ROAD 5A',
			$this->t('1 RD 5A'));
	}
	public function test19600000() {
		$this->assertEquals('1 ROAD 22',
			$this->t('1 ROAD 22'));
	}
	public function test19700000() {
		$this->assertEquals('1 7TH RD # 22',
			$this->t('1 7 ROAD # 22'));
	}
	public function test19800000() {
		$this->assertEquals('1 8TH RD APT 22',
			$this->t('1 8 ROAD apt 22'));
	}
	public function test19900000() {
		$this->assertEquals('1 1/2 ROAD 22',
			$this->t('1 1/2 ROAD 22'));
	}
	public function test20000000() {
		$this->assertEquals('1 ROAD 112 APT 8',
			$this->t('1 ROAD 112 apt. 8'));
	}
	public function test20100000() {
		$this->assertEquals('3 ROAD 22 APT 10',
			$this->t('3 ROAD 22 apt. #10'));
	}
	public function test20200000() {
		$this->assertEquals('5 ROAD 235 # 6',
			$this->t('5 ROAD 235 #6'));
	}
	public function test20600000() {
		$this->assertEquals('1 ROUTE 88',
			$this->t('1 RT 88'));
	}
	public function test20700000() {
		$this->assertEquals('1 ROUTE 95',
			$this->t('1 RTE 95'));
	}
	public function test20800000() {
		$this->assertEquals('1 ROUTE 1150EE',
			$this->t('1 ROUTE 1150EE'));
	}
	public function test20900000() {
		$this->assertEquals('1 ROUTE 1150EE STE 55',
			$this->t('1 ROUTE 1150EE suite 55'));
	}
	public function test21000000() {
		$this->assertEquals('1 1/2 ROUTE 1150EE STE 55',
			$this->t('1 1/2 ROUTE 1150EE suite 55'));
	}
	public function test21300000() {
		$this->assertEquals('941 BOULEVARD E APT 5B',
			$this->t('941 Boulevard East APT 5B'));
	}
	public function test21400000() {
		$this->assertEquals('941 BOULEVARD E APT 5B',
			$this->t('941 Blvd E APT 5B'));
	}
	public function test21700000() {
		$this->assertEquals('123 AVENUE B',
			$this->t('123 AVENUE B'));
	}
	public function test21800000() {
		$this->assertEquals('123 AVENUE B',
			$this->t('123 AVE B'));
	}
	public function test21900000() {
		$this->assertEquals('123 AVENUE B # 3',
			$this->t('123 AVE B #3'));
	}
	public function test22000000() {
		$this->assertEquals('123 AVENUE B APT 3',
			$this->t('123 AVE B APARTMENT 3'));
	}
	public function test22200000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POB 9'));
	}
	public function test22252000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P. O. B. 9'));
	}
	public function test22260000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P O Box 9'));
	}
	public function test22261000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P. O. Box 9'));
	}
	public function test22263000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O. Box 9, 100 Powers Blvd'));
	}
	public function test22265000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O.Box 9'));
	}
	public function test22266000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POBox 9'));
	}
	public function test22267000() {
		$this->assertEquals('PO BOX 9',
			$this->t('PO BOX 9'));
	}
	public function test22268000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O. BOX 9'));
	}
	public function test22269000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O.B. 9'));
	}
	public function test22270000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P O B 9'));
	}
	public function test22273000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POST OFFICE BOX 9'));
	}
	public function test22274000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POST OFFICE BX 9'));
	}
	public function test22275000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POB #9'));
	}
	public function test22276000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O. BOX #9'));
	}
	public function test22277000() {
		$this->assertEquals('PO BOX 9',
			$this->t('P.O. BX. 9'));
	}
	public function test22278000() {
		$this->assertEquals('PO BOX 9',
			$this->t('PO BX 9'));
	}
	public function test22300000() {
		$this->assertEquals('PO BOX 12',
			$this->t('CALLER 12'));
	}
	public function test22400000() {
		$this->assertEquals('PO BOX 35',
			$this->t('BIN 35'));
	}
	public function test22500000() {
		$this->assertEquals('PO BOX 123',
			$this->t('LOCKBOX 123'));
	}
	public function test22600000() {
		$this->assertEquals('PO BOX 77',
			$this->t('DRAWER 77'));
	}
	public function test22700000() {
		$this->assertEquals('PO BOX 987',
			$this->t('PO BOX 987'));
	}
	public function test22710000() {
		$this->assertEquals('PO BOX 268',
			$this->t('PO 268, Radio City Sta.'));
	}
	public function test22720000() {
		$this->assertEquals('PO BOX 268',
			$this->t('BOX 268'));
	}
	public function test22800000() {
		$this->assertEquals('PO BOX A',
			$this->t('CALLER A'));
	}
	public function test22900000() {
		$this->assertEquals('PO BOX E',
			$this->t('BIN E'));
	}
	public function test23000000() {
		$this->assertEquals('PO BOX A',
			$this->t('LOCKBOX A'));
	}
	public function test23100000() {
		$this->assertEquals('PO BOX B',
			$this->t('DRAWER B'));
	}
	public function test23200000() {
		$this->assertEquals('PO BOX C',
			$this->t('PO BOX C'));
	}
	public function test23300000() {
		$this->assertEquals('PO BOX B',
			$this->t('POB B'));
	}
	public function test23400000() {
		$this->assertEquals('PO BOX 34',
			$this->t('FIRM CALLER 34'));
	}
	public function test23500000() {
		$this->assertEquals('PO BOX L',
			$this->t('FIRM CALLER L'));
	}
	public function test23700000() {
		$this->assertEquals('PO BOX 9',
			$this->t('POB ##9'));
	}
	public function test24000000() {
		$this->assertEquals('101 MAIN ST',
			$this->t('101 MAIN STreet'));
	}
	public function test24100000() {
		$this->assertEquals('101 MAIN ST APT 12',
			$this->t('101 MAIN STreet APartmenT 12'));
	}
	public function test24200000() {
		$this->assertEquals('101 W MAIN ST APT 12',
			$this->t('101 West MAIN STreet APT 12'));
	}
	public function test24300000() {
		$this->assertEquals('101 W MAIN ST S APT 12',
			$this->t('101 West MAIN STreet South APT 12'));
	}
	public function test24400000() {
		$this->assertEquals('411 N RIDGEWOOD RD',
			$this->t('411 North Ridgewood Road'));
	}
	public function test24401000() {
		$this->assertEquals('411 N RIDGEWOOD RD',
			$this->t('411 N Ridgewood Road'));
	}
	public function test24405000() {
		$this->assertEquals('1 NORTH AVE',
			$this->t('1 NORTH AVEnue'));
	}
	public function test24406000() {
		$this->assertEquals('1 NORTH AVE',
			$this->t('1 N Avenue'));
	}
	public function test24410000() {
		$this->assertEquals('39 N MOUNTAIN AVE',
			$this->t('39 NORTH MOUNTAIN AVE'));
	}
	public function test24411000() {
		$this->assertEquals('39 N MOUNTAIN AVE',
			$this->t('39 N MOUNTAIN AVE'));
	}
	public function test24412000() {
		$this->assertEquals('39 MOUNTAIN AVE N',
			$this->t('39 MOUNTAIN AVE NORTH'));
	}
	public function test24413000() {
		$this->assertEquals('39 MOUNTAIN AVE N',
			$this->t('39 MOUNTAIN AVE N'));
	}
	public function test24415000() {
		$this->assertEquals('1 SOUTHEAST FWY N',
			$this->t('1 SOUTHEAST FREEWAY NORTH'));
	}
	public function test24416000() {
		$this->assertEquals('1 SOUTHEAST FWY N',
			$this->t('1 SE FREEWAY NORTH'));
	}
	public function test24419000() {
		$this->assertEquals('1 BAY WEST DR',
			$this->t('1 BAY WEST DRive'));
	}
	public function test24420000() {
		$this->assertEquals('110 E END AVE',
			$this->t('110 EAST END AVE'));
	}
	public function test24425000() {
		$this->assertEquals('110 E END AVE',
			$this->t('110 E END AVE'));
	}
	public function test24430000() {
		$this->assertEquals('184 UPPER MOUNTAIN AVE',
			$this->t('184 UPPR MOUNTAIN AVE'));
	}
	public function test24440000() {
		$this->assertEquals('184 UPPER MOUNTAIN AVE',
			$this->t('184 UPPER MOUNTAIN AVE'));
	}
	public function test24450000() {
		$this->assertEquals('184 UPPER LAVALA ST',
			$this->t('184 UPPER LAVALA street'));
	}
	public function test24460000() {
		$this->assertEquals('184 UPPER LAVALA ST',
			$this->t('184 UPPR LAVALA street'));
	}
	public function test24500000() {
		$this->assertEquals('4015 7TH AVE',
			$this->t('4015 Seventh Avenue'));
	}
	public function test24600000() {
		$this->assertEquals('4015 7TH AVE',
			$this->t('4015 7 Avenue'));
	}
	public function test24700000() {
		$this->assertEquals('4015 1/2 7TH AVE',
			$this->t('4015 1/2 7 Avenue'));
	}
	public function test24800000() {
		$this->assertEquals('4015 7TH AVE',
			$this->t('4015 7th Avenue'));
	}
	public function test24900000() {
		$this->assertEquals('4015 7TH AVE',
			$this->t('4015 7th Ave'));
	}
	public function test25000000() {
		$this->assertEquals('4015 7TH AVE APT 4',
			$this->t('4015 7th Avenue apt 4'));
	}
	public function test25100000() {
		$this->assertEquals('4015 7TH AVE APT 4B',
			$this->t('4015 7th Avenue apt 4b'));
	}
	public function test25200000() {
		$this->assertEquals('4015 7TH AVE APT B4',
			$this->t('4015 7th Avenue apt b4'));
	}
	public function test25300000() {
		$this->assertEquals('4015 7TH AVE # B4',
			$this->t('4015 7th Avenue #b4'));
	}
	public function test25400000() {
		$this->assertEquals('2 PARK AVE',
			$this->t('Two Park Av'));
	}
	public function test25500000() {
		$this->assertEquals('119 W 23RD ST',
			$this->t('119 West 23 Street'));
	}
	public function test25600000() {
		$this->assertEquals('444 N CAPITOL ST NW # 225',
			$this->t('444 N Capitol Street  NW  #225'));
	}
	public function test26400000() {
		$this->assertEquals('842 E BROADWAY',
			$this->t('842 East Broadway'));
	}
	public function test26500000() {
		$this->assertEquals('842 BROADWAY',
			$this->t('842 Broadway'));
	}
	public function test26900000() {
		$this->assertEquals('1 WASHINGTON SQUARE VLG APT 3D',
			$this->t('One Washington Square Village Apartment 3D'));
	}
	public function test27000000() {
		$this->assertEquals('1 WASHINGTON SQUARE VLG APT 3D',
			$this->t('One Washington Sq Village Apartment 3D'));
	}
	public function test28000000() {
		$this->assertEquals('618 FLAME RD FL 33',
			$this->t('618 Flame Road  33rd Floor'));
	}
	public function test29100000() {
		$this->assertEquals('3726 LAKE SAINT GEORGE DR',
			$this->t('3726 Lake Saint George Dr'));
	}
	public function test29120000() {
		$this->assertEquals('3726 LAKE SAINT GEORGE DR',
			$this->t('3726 Lake St. George Dr'));
	}
	public function test29130000() {
		$this->assertEquals('3726 LAKE ST',
			$this->t('3726 Lake St'));
	}
	public function test29150000() {
		$this->assertEquals('28 W FORSYTH STREET PL',
			$this->t('28 West Forsyth Street Pl'));
	}
	public function test29155000() {
		$this->assertEquals('28 FORSYTH STREET PL',
			$this->t('28 Forsyth Street Pl'));
	}
	public function test29160000() {
		$this->assertEquals('28 W FORSYTH STREET PL',
			$this->t('28 West Forsyth St Pl'));
	}
	public function test29170000() {
		$this->assertEquals('28 W SAINT FORSYTH PL',
			$this->t('28 West St Forsyth Pl'));
	}
	public function test29180000() {
		$this->assertEquals('28 SAINT FORSYTH PL',
			$this->t('28 St Forsyth Pl'));
	}
//	public function test29190000() {
//		$this->assertEquals('SAINT FORSYTH ST N DREMEL PL',
//			$this->t('Saint Forsyth Street North Dremel Pl'));
//	}
//	public function test29195000() {
//		$this->assertEquals('SAINT FORSYTH ST N DREMEL PL',
//			$this->t('St Forsyth Street North Dremel Pl'));
//	}
	public function test29200000() {
		$this->assertEquals('2 W 42ND ST APT 4D',
			$this->t('2 West 42 ST Apt. 4D'));
	}
//	public function test29206000() {
//		$this->assertEquals('42ND ST 58TH AVE',
//			$this->t('42 St 58 Ave'));
//	}
//	public function test29208000() {
//		$this->assertEquals('42ND ST 58TH AVE',
//			$this->t('42 Street 58 Avenue'));
//	}
//	public function test29210000() {
//		$this->assertEquals('W 42ND ST 58TH AVE APT 4D',
//			$this->t('West 42 ST 58 Av Apt. 4D'));
//	}
//	public function test29220000() {
//		$this->assertEquals('FORSYTH ST DREMEL PL',
//			$this->t('Forsyth St Dremel Pl'));
//	}
//	public function test29225000() {
//		$this->assertEquals('FORSYTH ST DREMEL PL',
//			$this->t('Forsyth Street Dremel Place'));
//	}
//	public function test29230000() {
//		$this->assertEquals('W SAINT FORSYTH ST N DREMEL PL',
//			$this->t('West St Forsyth St North Dremel Pl'));
//	}
//	public function test29233000() {
//		$this->assertEquals('W SAINT FORSYTH ST N DREMEL PL',
//			$this->t('West St Forsyth Street North Dremel Pl'));
//	}
//	public function test29236000() {
//		$this->assertEquals('W SAINT FORSYTH ST N DREMEL PL',
//			$this->t('West Saint Forsyth St North Dremel Pl'));
//	}
//	public function test29238000() {
//		$this->assertEquals('W SAINT FORSYTH ST N DREMEL PL',
//			$this->t('West Saint Forsyth Street North Dremel Pl'));
//	}
//	public function test29240000() {
//		$this->assertEquals('W FORSYTH ST N DREMEL PL',
//			$this->t('West Forsyth St North Dremel Pl'));
//	}
//	public function test29245000() {
//		$this->assertEquals('W FORSYTH ST N DREMEL PL',
//			$this->t('West Forsyth Street North Dremel Pl'));
//	}
//	public function test29250000() {
//		$this->assertEquals('38 W SAINT DREMEL PL',
//			$this->t('38 West St Dremel Pl'));
//	}
//	public function test29255000() {
//		$this->assertEquals('38 W SAINT DREMEL PL',
//			$this->t('38 West Saint Dremel Pl'));
//	}
	public function test29300000() {
		$this->assertEquals('4513 3RD STREET CIR W',
			$this->t('4513 3 STREET CIRCLE WEST'));
	}
	public function test29310000() {
		$this->assertEquals('4513 3RD STREET CIR W',
			$this->t('4513 3 ST CIRCLE WEST'));
	}
	public function test29400000() {
		$this->assertEquals('789 MAIN AVENUE DR',
			$this->t('789 MAIN AVE DRIVE'));
	}
	public function test29410000() {
		$this->assertEquals('789 MAIN AVENUE DR',
			$this->t('789 MAIN AVENUE DRIVE'));
	}
	public function test29500000() {
		$this->assertEquals('1 LA JOLLA BLVD',
			$this->t('1 La Jolla Boulevard'));
	}
//	public function test29510000() {
//		$this->assertEquals('LA JOLLA BLVD HOLLYWOOD BLVD',
//			$this->t('La Jolla Blvd Hollywood Blvd'));
//	}
//	public function test29510100() {
//		$this->assertEquals('LA JOLLA BLVD HOLLYWOOD BLVD',
//			$this->t('La Jolla Boulevard Hollywood Boulevard'));
//	}
//	public function test29520000() {
//		$this->assertEquals('HOLLYWOOD BLVD LA JOLLA BLVD',
//			$this->t('Hollywood Blvd La Jolla Blvd'));
//	}
//	public function test29520100() {
//		$this->assertEquals('HOLLYWOOD BLVD LA JOLLA BLVD',
//			$this->t('Hollywood Boulevard La Jolla Boulevard'));
//	}
//	public function test29530000() {
//		$this->assertEquals('JACKSON LN MAIN ST',
//			$this->t('Jackson La Main St'));
//	}
//	public function test29533000() {
//		$this->assertEquals('JACKSON LN MAIN ST',
//			$this->t('Jackson Ln Main St'));
//	}
//	public function test29535000() {
//		$this->assertEquals('JACKSON LN MAIN ST',
//			$this->t('Jackson Lane Main St'));
//	}
//	public function test29536000() {
//		$this->assertEquals('W JACKSON LN E MAIN ST',
//			$this->t('West Jackson Lane East Main St'));
//	}
//	public function test29537000() {
//		$this->assertEquals('JACKSON LN E MAIN ST',
//			$this->t('Jackson Lane East Main St'));
//	}
//	public function test29538000() {
//		$this->assertEquals('W JACKSON LN MAIN ST',
//			$this->t('West Jackson Lane Main St'));
//	}
//	public function test29539000() {
//		$this->assertEquals('W JACKSON LN MAIN STREET PLZ',
//			$this->t('West Jackson Lane Main St Plaza'));
//	}
//	public function test29539500() {
//		$this->assertEquals('W JACKSON LN MAIN STREET PLZ',
//			$this->t('West Jackson Lane Main Street Plaza'));
//	}
	public function test30000000() {
		$this->assertEquals('53 VIA NORTE DR',
			$this->t('53 Via Norte Drive'));
	}
	public function test30010000() {
		$this->assertEquals('53 N VIA DEL SUR DR',
			$this->t('53 North Via Del Sur Drive'));
	}
	public function test30020000() {
		$this->assertEquals('53 N VIADUCT DR',
			$this->t('53 North Viaduct Drive'));
	}
	public function test30101000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('highway contract route 33 box 44'));
	}
	public function test30102000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('hcr 33 box 44'));
	}
	public function test30103000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('star route 33 box 44'));
	}
	public function test30104000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('hc 33 box 44'));
	}
	public function test30105000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('hc # 33 box # 44'));
	}
	public function test30106000() {
		$this->assertEquals('HC 33 BOX 44',
			$this->t('highway contract 33 box 44'));
	}
	public function test31000000() {
		$this->assertEquals('727 S E MAIN ST S220',
			$this->t('727 S. E. Main Street, S-220'));
	}
	public function test31110000() {
		$this->assertEquals('701 GROVE RD TERC FL 5',
			$this->t('701 Grove Rd/TERC 5th Floor'));
	}
	public function test31120000() {
		$this->assertEquals('701 GROVE RD ETC',
			$this->t('701 Grove Road/ETC'));
	}
	public function test31130000() {
		$this->assertEquals('701 GROVE RD ROGER C PEACE',
			$this->t('701 Grove Road/Roger C. Peace'));
	}
	public function test31140000() {
		$this->assertEquals('701 GROVE RD FL 5 PULM',
			$this->t('701 Grove Road/5th Fl. Pulm'));
	}
	public function test31200000() {
		$this->assertEquals('200 PATEWOOD DR SA120',
			$this->t('200 Patewood Drive,SA120'));
	}
}
