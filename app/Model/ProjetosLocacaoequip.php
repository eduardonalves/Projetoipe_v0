<?php
App::uses('AppModel', 'Model');
/**
 * ProjetosLocacaoequip Model
 *
 * @property Projeto $Projeto
 * @property Locacaoequip $Locacaoequip
 */
class ProjetosLocacaoequip extends AppModel {

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
		'Locacaoequip' => array(
			'className' => 'Locacaoequip',
			'foreignKey' => 'locacaoequip_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
