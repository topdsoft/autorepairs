<?php
/* Repair Test cases generated on: 2011-12-12 10:46:58 : 1323708418*/
App::uses('Repair', 'Model');

/**
 * Repair Test Case
 *
 */
class RepairTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.repair', 'app.vehicle', 'app.make', 'app.engine', 'app.automodel', 'app.mileage', 'app.repairtype');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Repair = ClassRegistry::init('Repair');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Repair);

		parent::tearDown();
	}

}
