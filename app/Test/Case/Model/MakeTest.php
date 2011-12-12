<?php
/* Make Test cases generated on: 2011-12-12 10:39:38 : 1323707978*/
App::uses('Make', 'Model');

/**
 * Make Test Case
 *
 */
class MakeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.make', 'app.engine', 'app.vehicle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Make = ClassRegistry::init('Make');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Make);

		parent::tearDown();
	}

}
