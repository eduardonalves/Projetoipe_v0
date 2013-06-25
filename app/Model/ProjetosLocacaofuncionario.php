<?php
App::uses('AppModel', 'Model');
/**
 * ProjetosLocacaofuncionario Model
 *
 * @property Projeto $Projeto
 * @property Locacaofuncionario $Locacaofuncionario
 */
class ProjetosLocacaofuncionario extends AppModel {

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
		'locacaofuncionario_id' => array(
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
		'Locacaofuncionario' => array(
			'className' => 'Locacaofuncionario',
			'foreignKey' => 'locacaofuncionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
