<?php
/**
 * VeiculoFixture
 *
 */
class VeiculoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'modelo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fabricante' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quilometragem' => array('type' => 'float', 'null' => true, 'default' => null),
		'valorhoralocacao' => array('type' => 'float', 'null' => false, 'default' => null),
		'valordialocacao' => array('type' => 'float', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'veiculomanute_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'veiculocusto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'modelo' => 'Lorem ipsum dolor sit amet',
			'fabricante' => 'Lorem ipsum dolor sit amet',
			'quilometragem' => 1,
			'valorhoralocacao' => 1,
			'valordialocacao' => 1,
			'status' => 'Lorem ipsum dolor sit amet',
			'veiculomanute_id' => 1,
			'veiculocusto_id' => 1,
			'created' => '2013-06-07 01:15:27',
			'modified' => '2013-06-07 01:15:27'
		),
	);

}
