<?php
App::uses('AppController', 'Controller');
/**
 * Locacaoequipamentos Controller
 *
 * @property Locacaoequipamento $Locacaoequipamento
 */
class LocacaoequipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locacaoequipamento->recursive = 0;
		$this->set('locacaoequipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequipamento'));
		}
		$this->loadModel('Itensloc');
		$this->loadModel('Itensprojetosequipamentos');
		$itenslocs = $this->Itensloc->find('all', array('conditions' => array('Itensloc.locacaoequipamento_id' => $id), 'recursive' => 0));
		$itensprojetosequipamentos = $this->Itensprojetosequipamentos->find('all', array('conditions' => array('Itensprojetosequipamentos.locacaoequipamento_id' => $id), 'recursive' => 0));
		$options = array('conditions' => array('Locacaoequipamento.' . $this->Locacaoequipamento->primaryKey => $id));
		$this->loadModel('Equipamento');
		$opts['joins'] = array(
			array('table' => 'itenslocs',
				'alias' => 'Itensloc',
				'type' => 'INNER',
				'conditions' => array('Itensloc.tiposequip_id = Equipamento.tiposequip_id', 'Equipamento.status' => 'Disponivel'
				)
			)
		);
		
		$opts['conditions'] = array('Itensloc.locacaoequipamento_id' => $id);
		$opts['order'] = array('Itensloc.tiposequip_id');
		$equipamentos = $this->Equipamento->find('all', $opts);
		$this->set(compact('equipamentos', 'itenslocs', 'itensprojetosequipamentos'));
		$this->set('locacaoequipamento', $this->Locacaoequipamento->find('first', $options, 'equipamento'));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locacaoequipamento->create();
			if ($this->Locacaoequipamento->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequipamento could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->Locacaoequipamento->Projeto->find('list');
		$users = $this->Locacaoequipamento->User->find('list');
		$tiposequips = $this->Locacaoequipamento->Tiposequip->find('list');
		$this->set(compact('projetos', 'users', 'tiposequips'));
	}
	


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locacaoequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locacaoequipamento.' . $this->Locacaoequipamento->primaryKey => $id));
			$this->request->data = $this->Locacaoequipamento->find('first', $options);
		}
		$projetos = $this->Locacaoequipamento->Projeto->find('list');
		$users = $this->Locacaoequipamento->User->find('list');
		$tiposequips = $this->Locacaoequipamento->Tiposequip->find('list');
		$this->set(compact('projetos', 'users', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locacaoequipamento->id = $id;
		if (!$this->Locacaoequipamento->exists()) {
			throw new NotFoundException(__('Invalid locacaoequipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locacaoequipamento->delete()) {
			$this->Session->setFlash(__('Locacaoequipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function cancelar($id = null) {
		if (!$this->Locacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequipamento'));
		}
		
		$findos = $this->Locacaoequipamento->find('first', array('conditions' => array('Locacaoequipamento.id' => $id)));
		
		if($findos['Locacaoequipamento']['status'] != 'Cancelada'){
			$cancelarlocacao = array('id' => $id, 'status' => 'Cancelada' );
			$this->Locacaoequipamento->save($cancelarlocacao);
			$this->loadModel('Itensloc');
			$upitenslocs = $this->Itensloc->find('all', array('conditions' => array('Itensloc.locacaoequipamento_id' => $id)));
			
			foreach($upitenslocs as $upitensloc){
					$dositenloc= array('id' => $upitensloc['Itensloc']['id'] , 'status' => 'Cancelado');
					$this->Itensloc->save($dositenloc);
			}

			$this->Session->setFlash(__('O.S Cancelada'));
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash(__('Esta O.S já está Cancelada!'));
			$this->redirect(array('action' => 'index'));	
		}
	}
}
