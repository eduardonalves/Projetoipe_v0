<?php
App::uses('AppModel', 'Model');
/**
 * Locacaoveiculo Model
 *
 * @property Veiculo $Veiculo
 * @property Projeto $Projeto
 */
class Locacaoveiculo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datafim' => array(
			'date' => array(
				'rule' => array('date'),
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Veiculo' => array(
			'className' => 'Veiculo',
			'joinTable' => 'locacaoveiculos_veiculos',
			'foreignKey' => 'locacaoveiculo_id',
			'associationForeignKey' => 'veiculo_id',
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
			'joinTable' => 'projetos_locacaoveiculos',
			'foreignKey' => 'locacaoveiculo_id',
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
