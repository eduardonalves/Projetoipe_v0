<?php
App::uses('AppModel', 'Model');
/**
 * Locacaoequip Model
 *
 * @property Equipamento $Equipamento
 * @property Tiposequip $Tiposequip
 * @property Projeto $Projeto
 */
class Locacaoequip extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Equipamento' => array(
			'className' => 'Equipamento',
			'joinTable' => 'locacaoequips_equipamentos',
			'foreignKey' => 'locacaoequip_id',
			'associationForeignKey' => 'equipamento_id',
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
		'Tiposequip' => array(
			'className' => 'Tiposequip',
			'joinTable' => 'locacaoequips_tiposequips',
			'foreignKey' => 'locacaoequip_id',
			'associationForeignKey' => 'tiposequip_id',
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
			'joinTable' => 'projetos_locacaoequips',
			'foreignKey' => 'locacaoequip_id',
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
