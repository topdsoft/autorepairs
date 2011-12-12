<?php
/* Automodels Test cases generated on: 2011-12-12 10:43:02 : 1323708182*/
App::uses('Automodels', 'Controller');

/**
 * TestAutomodels *
 */
class TestAutomodels extends Automodels {
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
 * Automodels Test Case
 *
 */
class AutomodelsTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Automodels = new TestAutomodels();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Automodels);

		parent::tearDown();
	}

}
