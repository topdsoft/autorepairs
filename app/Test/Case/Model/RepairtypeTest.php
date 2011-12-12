<?php
/* Repairtype Test cases generated on: 2011-12-12 10:41:38 : 1323708098*/
App::uses('Repairtype', 'Model');

/**
 * Repairtype Test Case
 *
 */
class RepairtypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.repairtype', 'app.repair', 'app.auto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Repairtype = ClassRegistry::init('Repairtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Repairtype);

		parent::tearDown();
	}

}
