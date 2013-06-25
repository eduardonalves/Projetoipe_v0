<?php
App::uses('AppModel', 'Model');
/**
 * Tiposequip Model
 *
 * @property Equipamento $Equipamento
 * @property Itensloc $Itensloc
 * @property Locacaoequipamento $Locacaoequipamento
 */
class Tiposequip extends AppModel {
	public	$displayField = "tipo";

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'tiposequip_id',
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
		'Itensloc' => array(
			'className' => 'Itensloc',
			'foreignKey' => 'tiposequip_id',
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
			'foreignKey' => 'tiposequip_id',
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
		'Locacaoequipamento' => array(
			'className' => 'Locacaoequipamento',
			'joinTable' => 'locacaoequipamentos_tiposequips',
			'foreignKey' => 'tiposequip_id',
			'associationForeignKey' => 'locacaoequipamento_id',
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
