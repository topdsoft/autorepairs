<?php
/* Engine Test cases generated on: 2011-12-12 10:39:25 : 1323707965*/
App::uses('Engine', 'Model');

/**
 * Engine Test Case
 *
 */
class EngineTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.engine', 'app.make', 'app.vehicle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Engine = ClassRegistry::init('Engine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Engine);

		parent::tearDown();
	}

}
