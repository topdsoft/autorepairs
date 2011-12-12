<?php
/* Automodel Test cases generated on: 2011-12-12 10:39:02 : 1323707942*/
App::uses('Automodel', 'Model');

/**
 * Automodel Test Case
 *
 */
class AutomodelTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.automodel', 'app.vehicle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Automodel = ClassRegistry::init('Automodel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Automodel);

		parent::tearDown();
	}

}
