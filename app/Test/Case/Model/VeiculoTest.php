<?php
App::uses('Veiculo', 'Model');

/**
 * Veiculo Test Case
 *
 */
class VeiculoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.veiculo',
		'app.veiculomanute',
		'app.veiculocusto',
		'app.frete',
		'app.venda',
		'app.cliente',
		'app.fretes_veiculo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Veiculo = ClassRegistry::init('Veiculo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Veiculo);

		parent::tearDown();
	}

}
