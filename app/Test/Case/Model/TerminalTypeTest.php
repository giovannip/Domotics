<?php
App::uses('TerminalType', 'Model');

/**
 * TerminalType Test Case
 *
 */
class TerminalTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.terminal_type',
		'app.terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TerminalType = ClassRegistry::init('TerminalType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TerminalType);

		parent::tearDown();
	}

}
