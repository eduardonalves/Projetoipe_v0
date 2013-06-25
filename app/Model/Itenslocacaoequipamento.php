<?php
App::uses('AppModel', 'Model');
/**
 * Itenslocacaoequipamento Model
 *
 * @property Projeto $Projeto
 * @property Equipamento $Equipamento
 */
class Itenslocacaoequipamento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'projeto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'equipamento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'projeto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'equipamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tiposequip' => array(
			'className' => 'Tiposequip',
			'foreignKey' => 'tiposequip_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
