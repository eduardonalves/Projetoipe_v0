<?php
App::uses('AppModel', 'Model');
/**
 * Itensloc Model
 *
 * @property Locacaoequipamento $Locacaoequipamento
 * @property Tiposequip $Tiposequip
 */
class Itensloc extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'locacaoequipamento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tiposequip_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Locacaoequipamento' => array(
			'className' => 'Locacaoequipamento',
			'foreignKey' => 'locacaoequipamento_id',
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
