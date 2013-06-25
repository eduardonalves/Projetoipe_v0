<?php
App::uses('AppModel', 'Model');
/**
 * Modelosequip Model
 *
 * @property Equipamento $Equipamento
 * @property Locacaoequip $Locacaoequip
 */
class Modelosequip extends AppModel {

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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'modelosequip_id',
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
		'Locacaoequip' => array(
			'className' => 'Locacaoequip',
			'joinTable' => 'locacaoequips_modelosequips',
			'foreignKey' => 'modelosequip_id',
			'associationForeignKey' => 'locacaoequip_id',
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
