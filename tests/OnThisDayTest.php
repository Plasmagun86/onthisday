<?php
use Skybluesofa\OnThisDay\OnThisDay;

class OnThisDayTest extends PHPUnit_Framework_TestCase {
	function test_january_object() {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/January.php');
		$this->assertNotContains ("New Year's Day", OnThisDay::getEvents('1/1/2016'));
		$this->assertContains ("New Year's Day", OnThisDay::getHolidays('1/1/2016'));
	}
	function test_february_object() {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/February.php');
		$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_march_object() {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/March.php');
		//$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_april_object() {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/April.php');
		//$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_july_object() {
		$this->assertFileExists(__DIR__.'/../tests/Custom/En/Us/July.php');
		$events = OnThisDay::useCustomEvents("Skybluesofa\OnThisDay\Tests\Custom")->getEvents('7/1/2016');
		$this->assertContains ("Some Custom Event", $events);
	}
	function test_october_object () {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/October.php');
		$this->assertNotContains ('Halloween', OnThisDay::getEvents('10/31/2016'));
		$this->assertContains ('Halloween', OnThisDay::getHolidays('10/31/2016'));
	}
	function test_december_object () {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/December.php');
		//$this->assertContains ("New Year's Eve", OnThisDay::getEvents('12/31/2016'));
	}
}
?>
