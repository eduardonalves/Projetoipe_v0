<?php
App::uses('AppModel', 'Model');
/**
 * Projeto Model
 *
 * @property Cliente $Cliente
 * @property Alocacaoequipamento $Alocacaoequipamento
 * @property Itensprojetosequipamento $Itensprojetosequipamento
 * @property Locacaoequipamento $Locacaoequipamento
 * @property Equipamento $Equipamento
 * @property Funcionario $Funcionario
 * @property Locacaoequip $Locacaoequip
 * @property Locacaofuncionario $Locacaofuncionario
 * @property Locacaoveiculo $Locacaoveiculo
 * @property Veiculo $Veiculo
 */
class Projeto extends AppModel {
	public	$displayField = "nome";
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cliente_id' => array(
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
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
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
		'Alocacaoequipamento' => array(
			'className' => 'Alocacaoequipamento',
			'foreignKey' => 'projeto_id',
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
			'foreignKey' => 'projeto_id',
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
		'Locacaoequipamento' => array(
			'className' => 'Locacaoequipamento',
			'foreignKey' => 'projeto_id',
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
		'Equipamento' => array(
			'className' => 'Equipamento',
			'joinTable' => 'projetos_equipamentos',
			'foreignKey' => 'projeto_id',
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
		'Funcionario' => array(
			'className' => 'Funcionario',
			'joinTable' => 'projetos_funcionarios',
			'foreignKey' => 'projeto_id',
			'associationForeignKey' => 'funcionario_id',
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
		'Locacaoequip' => array(
			'className' => 'Locacaoequip',
			'joinTable' => 'projetos_locacaoequips',
			'foreignKey' => 'projeto_id',
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
		),
		'Locacaofuncionario' => array(
			'className' => 'Locacaofuncionario',
			'joinTable' => 'projetos_locacaofuncionarios',
			'foreignKey' => 'projeto_id',
			'associationForeignKey' => 'locacaofuncionario_id',
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
		'Locacaoveiculo' => array(
			'className' => 'Locacaoveiculo',
			'joinTable' => 'projetos_locacaoveiculos',
			'foreignKey' => 'projeto_id',
			'associationForeignKey' => 'locacaoveiculo_id',
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
		'Veiculo' => array(
			'className' => 'Veiculo',
			'joinTable' => 'projetos_veiculos',
			'foreignKey' => 'projeto_id',
			'associationForeignKey' => 'veiculo_id',
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
