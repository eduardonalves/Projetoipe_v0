<?php
App::uses('AppController', 'Controller');
/**
 * Itensprojetosequipamentos Controller
 *
 * @property Itensprojetosequipamento $Itensprojetosequipamento
 */
class ItensprojetosequipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itensprojetosequipamento->recursive = 0;
		$this->set('itensprojetosequipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itensprojetosequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itensprojetosequipamento'));
		}
		$options = array('conditions' => array('Itensprojetosequipamento.' . $this->Itensprojetosequipamento->primaryKey => $id));
		$this->set('itensprojetosequipamento', $this->Itensprojetosequipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itensprojetosequipamento->create();
			if ($this->Itensprojetosequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The itensprojetosequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensprojetosequipamento could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->Itensprojetosequipamento->Projeto->find('list');
		$equipamentos = $this->Itensprojetosequipamento->Equipamento->find('list');
		$this->set(compact('projetos', 'equipamentos'));
	}
/**
 * addprojetoequip method
 *
 * @return void
 */
	public function addprojetoequip() {
		if ($this->request->is('post')) {
			//conta os equipamentos atendidos na tabela Itensprojetosequipamentos
			$tipoequipid  = $this->request->data['Itensprojetosequipamento']['tiposequip_id'];
			$equipcount = $this->Itensprojetosequipamento->find('count', array('conditions' => array('Itensprojetosequipamento.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensprojetosequipamento.tiposequip_id' => $tipoequipid, 'Itensprojetosequipamento.status' => 'Alocado')));
			
			//carrega os models que precisamos
			$this->loadModel('Itensloc');
			$this->loadModel('Equipamento');
			$this->loadModel('Tiposequip');
			$this->loadModel('Locacaoequipamento');
			//busca o status da os
			$locequip = $this->Locacaoequipamento->find('first', array('conditions' => array('Locacaoequipamento.id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'])));
			
			if($locequip['Locacaoequipamento']['status'] == 'Cancelada'){
				$this->Session->setFlash(__("Esta O.S está cancelada e não pode ter equipamentos alocados!"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'] ));
				
			}else{
				//busca a quantidade de equipamentos da tabela itenslocs
				$itenslocqtde = $this->Itensloc->field('qtde', array('Itensloc.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensloc.tiposequip_id' => $tipoequipid ));
				$itenslocqtde3 = $this->Itensloc->find('first', array('conditions' => array('Itensloc.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensloc.tiposequip_id' => $tipoequipid  )));
				$locacaoequipamento_id = $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'];
				$equipamentoid = $this->request->data['Itensprojetosequipamento']['equipamento_id'];
				
				if($equipcount < $itenslocqtde){	
					$this->Itensprojetosequipamento->create();
					//esta menos um, porque equipcount sempre começa com zero por isso igualei a variavel itenslocqtde2
					$itenslocqtde2 = $itenslocqtde - 1;
					$itensloc_id = $this->Itensloc->field('id', array('Itensloc.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensloc.tiposequip_id' => $tipoequipid ));
					if ($itenslocqtde2 == $equipcount){
						$statusitensloc = array('id' => $itensloc_id, 'status' => 'Atendido');
						$this->Itensloc->save($statusitensloc);
					}else{
							$statusitensloc = array('id' => $itensloc_id, 'status' => 'Parcialmente Atendido');
							$this->Itensloc->save($statusitensloc);	
					}
					
					if ($this->Itensprojetosequipamento->save($this->request->data)) {
						$data = array('id' => $equipamentoid, 'status' => 'Alocado');
						$this->Equipamento->save($data);
						// conto quantos itens de equipamentos tem na OS e quantos estão atendidos.
						$contintensloc = $this->Itensloc->find('count', array('conditions' => array('Itensloc.status' =>'Atendido', 'Itensloc.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'])) );
						$contintenslocatendido = $this->Itensloc->find('count', array('conditions' => array('Itensloc.locacaoequipamento_id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'])) );
						
						if ($contintensloc == $contintenslocatendido){
							$locacaoequipstatus = array('id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'status' => 'Atendida');
							$this->Locacaoequipamento->save($locacaoequipstatus);
						}else{
							$locacaoequipstatus = array('id' => $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'], 'status' => 'Parcialmente Atendida');
							$this->Locacaoequipamento->save($locacaoequipstatus);
						}
						$this->Session->setFlash(__("Um equipamento foi alocado."));
						$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'] ));
					
					} else {
						$this->Session->setFlash(__('The itensprojetosequipamento could not be saved. Please, try again.'));
						$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'] ));
					}

				}else{
					$this->Session->setFlash(__("Esta O.S já possui a quantidade solicitada deste equipamento."));
					$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $this->request->data['Itensprojetosequipamento']['locacaoequipamento_id'] ));
				}
			}
		}
		
		$projetos = $this->Itensprojetosequipamento->Projeto->find('list');
		$equipamentos = $this->Itensprojetosequipamento->Equipamento->find('list');
		$this->set(compact('projetos', 'equipamentos'));
	}
/**
 * Desalocar method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function desalocar($id = null) {
		if (!$this->Itensprojetosequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itensprojetosequipamento'));
		}
		
		$itensprojequip = $this->Itensprojetosequipamento->find('first', array('conditions' => array('Itensprojetosequipamento.id' => $id)));
		$idlocacao= $this->Itensprojetosequipamento->find('first', array('conditions' => array('Itensprojetosequipamento.id' => $id)));
		$this->loadModel('Locacaoequipamento');
		//busco os dados da locação para saber se está cancelada
		$locacaoequipdados = $this->Locacaoequipamento->find('first', array('conditions' => array('Locacaoequipamento.id' => $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'] )));
		if($locacaoequipdados['Locacaoequipamento']['status'] != 'Cancelada'){
			if($itensprojequip['Itensprojetosequipamento']['status'] == 'Alocado'){
				$itenalterar = array('id' => $id, 'status' => 'Concluido'); 
				$this->Itensprojetosequipamento->save($itenalterar);
				$this->loadModel('Equipamento');
				$equipalt = array('id' => $idlocacao['Itensprojetosequipamento']['equipamento_id'], 'status' =>'Disponivel');
				$this->Equipamento->save($equipalt);
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
			}else{
				$this->Session->setFlash(__("Somente equipamentos alocados podem ser desalocados!"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
			}
		}else{
				$this->Session->setFlash(__("Esta O.S está cancelada, esta ação não é permitida! Caso queira liberar o equipamento da O.S Clique no botão Cancelar!"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'] ));
		}
	}
/**
 * Desalocar method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function cancelar($id = null) {
		if (!$this->Itensprojetosequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itensprojetosequipamento'));
		}
		$itensprojequip = $this->Itensprojetosequipamento->find('first', array('conditions' => array('Itensprojetosequipamento.id' => $id)));
		$idlocacao= $this->Itensprojetosequipamento->find('first', array('conditions' => array('Itensprojetosequipamento.id' => $id)));
		$this->loadModel('Locacaoequipamento');
		$locacaoequipamento = $this->Locacaoequipamento->find('first', array('conditions' => array('Locacaoequipamento.id' => $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'])));
		if($locacaoequipamento['Locacaoequipamento']['status'] != 'Cancelada'){
			if($itensprojequip['Itensprojetosequipamento']['status'] == 'Alocado'){
				$itenalterar = array('id' => $id, 'status' => 'Cancelado'); 
				$this->Itensprojetosequipamento->save($itenalterar);
				
				$this->loadModel('Equipamento');
				$equipalt = array('id' => $idlocacao['Itensprojetosequipamento']['equipamento_id'], 'status' =>'Disponivel');
				$this->Equipamento->save($equipalt);
				$this->loadModel('Itensloc');
				$itenslocid = $this->Itensloc->find('first', array('conditions' => array('Itensloc.locacaoequipamento_id' => $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensloc.tiposequip_id' => $idlocacao['Itensprojetosequipamento']['tiposequip_id'])));
				$tiposequipalt = array('id' => $itenslocid['Itensloc']['id'], 'status' =>'Pendente' );
				$this->Itensloc->save($tiposequipalt);
				$this->loadModel('Locacaoequipamento');
				
				
				$oslocacaoalt = array('id' =>  $itenslocid['Itensloc']['locacaoequipamento_id'], 'status' => 'Pendente');
				$this->Locacaoequipamento->save($oslocacaoalt);
				$this->Session->setFlash(__("O equipamento foi cancelado da O.S com sucesso!"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
			
			} elseif($itensprojequip['Itensprojetosequipamento']['status'] == 'Cancelado'){
				$this->Session->setFlash(__("Este equipamento já está cancelado"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));		
			
			}elseif($itensprojequip['Itensprojetosequipamento']['status'] == 'Concluido'){
				$itenalterar = array('id' => $id, 'status' => 'Cancelado'); 
				$this->Itensprojetosequipamento->save($itenalterar);
				$this->loadModel('Itensloc');
				$itenslocid = $this->Itensloc->find('first', array('conditions' => array('Itensloc.locacaoequipamento_id' => $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensloc.tiposequip_id' => $idlocacao['Itensprojetosequipamento']['tiposequip_id'])));
				// contar quantos tem do mesmo tipo de equipamento na mesma os para mudar de status 
				$itensprojcount = $this->Itensprojetosequipamento->find('count', array('conditions' => array('Itensprojetosequipamento.locacaoequipamento_id' =>  $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id'], 'Itensprojetosequipamento.tiposequip_id' =>  $idlocacao['Itensprojetosequipamento']['tiposequip_id'], 'Itensprojetosequipamento.status' =>'Alocado')));
				
				if($itensprojcount != $itenslocid['Itensloc']['qtde'] ){
					$tiposequipalt = array('id' => $itenslocid['Itensloc']['id'], 'status' =>'Pendente' );
					$this->Itensloc->save($tiposequipalt);
					$this->loadModel('Locacaoequipamento');
					
					//contar antes de colocar se está pendente ou não
					$oslocacaoalt = array('id' =>  $itenslocid['Itensloc']['locacaoequipamento_id'], 'status' => 'Pendente');
					$this->Locacaoequipamento->save($oslocacaoalt);
					$this->Session->setFlash(__("O equipamento foi cancelado da O.S com sucesso!"));
					$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
				
				}
				$this->Session->setFlash(__("O equipamento foi cancelado da O.S com sucesso!"));
				$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
			}
		}else{
				if($idlocacao['Itensprojetosequipamento']['status'] == 'Cancelado'){
					$this->Session->setFlash(__("Este item já está cancelado!"));
					$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
				}else{
					$itenalterar = array('id' => $id, 'status' => 'Cancelado'); 
					$this->Itensprojetosequipamento->save($itenalterar);
					$this->loadModel('Equipamento');
					$equipalt = array('id' => $idlocacao['Itensprojetosequipamento']['equipamento_id'], 'status' =>'Disponivel');
					$this->Equipamento->save($equipalt);
					$this->Session->setFlash(__("O equipamento foi cancelado da O.S com sucesso!"));
					$this->redirect(array('controller' => 'Locacaoequipamentos','action' => 'view', $idlocacao['Itensprojetosequipamento']['locacaoequipamento_id']));
				}
		}
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Itensprojetosequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itensprojetosequipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itensprojetosequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The itensprojetosequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensprojetosequipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itensprojetosequipamento.' . $this->Itensprojetosequipamento->primaryKey => $id));
			$this->request->data = $this->Itensprojetosequipamento->find('first', $options);
		}
		$projetos = $this->Itensprojetosequipamento->Projeto->find('list');
		$equipamentos = $this->Itensprojetosequipamento->Equipamento->find('list');
		$this->set(compact('projetos', 'equipamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Itensprojetosequipamento->id = $id;
		if (!$this->Itensprojetosequipamento->exists()) {
			throw new NotFoundException(__('Invalid itensprojetosequipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itensprojetosequipamento->delete()) {
			$this->Session->setFlash(__('Itensprojetosequipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itensprojetosequipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
