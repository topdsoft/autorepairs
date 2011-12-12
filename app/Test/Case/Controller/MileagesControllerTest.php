<?php
/* Mileages Test cases generated on: 2011-12-12 10:43:52 : 1323708232*/
App::uses('MileagesController', 'Controller');

/**
 * TestMileagesController *
 */
class TestMileagesController extends MileagesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * MileagesController Test Case
 *
 */
class MileagesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mileage', 'app.vehicle', 'app.make', 'app.engine', 'app.automodel');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Mileages = new TestMileagesController();
		$this->Mileages->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mileages);

		parent::tearDown();
	}

}
