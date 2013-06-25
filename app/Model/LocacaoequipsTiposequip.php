<?php
App::uses('AppModel', 'Model');
/**
 * LocacaoequipsTiposequip Model
 *
 * @property Locacaoequip $Locacaoequip
 * @property Tiposequip $Tiposequip
 */
class LocacaoequipsTiposequip extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'locacaoequip_id' => array(
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
		'Locacaoequip' => array(
			'className' => 'Locacaoequip',
			'foreignKey' => 'locacaoequip_id',
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
