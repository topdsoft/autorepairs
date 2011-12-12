<?php
/* Mileage Test cases generated on: 2011-12-12 10:40:02 : 1323708002*/
App::uses('Mileage', 'Model');

/**
 * Mileage Test Case
 *
 */
class MileageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mileage', 'app.vehicle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Mileage = ClassRegistry::init('Mileage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mileage);

		parent::tearDown();
	}

}
