<?php
App::uses('AppModel', 'Model');
/**
 * Equipamento Model
 *
 * @property Tiposequip $Tiposequip
 * @property Equipamentocusto $Equipamentocusto
 * @property Equipamentomanute $Equipamentomanute
 * @property Itensprojetosequipamento $Itensprojetosequipamento
 * @property Projeto $Projeto
 */
class Equipamento extends AppModel {
	public	$displayField = "modelo";
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Tiposequip' => array(
			'className' => 'Tiposequip',
			'foreignKey' => 'tiposequip_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Equipamentocusto' => array(
			'className' => 'Equipamentocusto',
			'foreignKey' => 'equipamento_id',
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
		'Equipamentomanute' => array(
			'className' => 'Equipamentomanute',
			'foreignKey' => 'equipamento_id',
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
		'Itensprojetosequipamento' => array(
			'className' => 'Itensprojetosequipamento',
			'foreignKey' => 'equipamento_id',
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
		'Projeto' => array(
			'className' => 'Projeto',
			'joinTable' => 'projetos_equipamentos',
			'foreignKey' => 'equipamento_id',
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
