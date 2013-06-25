<?php
App::uses('AppController', 'Controller');
/**
 * LocacaoequipamentosTiposequips Controller
 *
 * @property LocacaoequipamentosTiposequip $LocacaoequipamentosTiposequip
 */
class LocacaoequipamentosTiposequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LocacaoequipamentosTiposequip->recursive = 0;
		$this->set('locacaoequipamentosTiposequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocacaoequipamentosTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequipamentos tiposequip'));
		}
		$options = array('conditions' => array('LocacaoequipamentosTiposequip.' . $this->LocacaoequipamentosTiposequip->primaryKey => $id));
		$this->set('locacaoequipamentosTiposequip', $this->LocacaoequipamentosTiposequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LocacaoequipamentosTiposequip->create();
			if ($this->LocacaoequipamentosTiposequip->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequipamentos tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequipamentos tiposequip could not be saved. Please, try again.'));
			}
		}
		$locacaoequipamentos = $this->LocacaoequipamentosTiposequip->Locacaoequipamento->find('list');
		$tiposequips = $this->LocacaoequipamentosTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaoequipamentos', 'tiposequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocacaoequipamentosTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequipamentos tiposequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocacaoequipamentosTiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequipamentos tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequipamentos tiposequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocacaoequipamentosTiposequip.' . $this->LocacaoequipamentosTiposequip->primaryKey => $id));
			$this->request->data = $this->LocacaoequipamentosTiposequip->find('first', $options);
		}
		$locacaoequipamentos = $this->LocacaoequipamentosTiposequip->Locacaoequipamento->find('list');
		$tiposequips = $this->LocacaoequipamentosTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaoequipamentos', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocacaoequipamentosTiposequip->id = $id;
		if (!$this->LocacaoequipamentosTiposequip->exists()) {
			throw new NotFoundException(__('Invalid locacaoequipamentos tiposequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocacaoequipamentosTiposequip->delete()) {
			$this->Session->setFlash(__('Locacaoequipamentos tiposequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequipamentos tiposequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
