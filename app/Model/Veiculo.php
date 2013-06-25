<?php
App::uses('AppModel', 'Model');
/**
 * Veiculo Model
 *
 * @property Veiculocusto $Veiculocusto
 * @property Veiculomanute $Veiculomanute
 * @property Frete $Frete
 * @property Projeto $Projeto
 */
class Veiculo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'modelo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fabricante' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Veiculocusto' => array(
			'className' => 'Veiculocusto',
			'foreignKey' => 'veiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Veiculomanute' => array(
			'className' => 'Veiculomanute',
			'foreignKey' => 'veiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Frete' => array(
			'className' => 'Frete',
			'joinTable' => 'fretes_veiculos',
			'foreignKey' => 'veiculo_id',
			'associationForeignKey' => 'frete_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Projeto' => array(
			'className' => 'Projeto',
			'joinTable' => 'projetos_veiculos',
			'foreignKey' => 'veiculo_id',
			'associationForeignKey' => 'projeto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
