<?php
App::uses('AppModel', 'Model');
/**
 * LocacaotiposequipsTiposequip Model
 *
 * @property Locacaotiposequip $Locacaotiposequip
 * @property Tiposequip $Tiposequip
 */
class LocacaotiposequipsTiposequip extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Locacaotiposequip' => array(
			'className' => 'Locacaotiposequip',
			'foreignKey' => 'locacaotiposequip_id',
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
