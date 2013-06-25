<?php
App::uses('AppModel', 'Model');
/**
 * Locacaofuncionario Model
 *
 * @property Funcionario $Funcionario
 * @property Projeto $Projeto
 */
class Locacaofuncionario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datasolicitacao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'datainicio' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'Funcionario' => array(
			'className' => 'Funcionario',
			'joinTable' => 'locacaofuncionarios_funcionarios',
			'foreignKey' => 'locacaofuncionario_id',
			'associationForeignKey' => 'funcionario_id',
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
			'joinTable' => 'projetos_locacaofuncionarios',
			'foreignKey' => 'locacaofuncionario_id',
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
