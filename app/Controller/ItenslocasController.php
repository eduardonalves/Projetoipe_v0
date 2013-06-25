<?php
App::uses('AppController', 'Controller');
/**
 * Itenslocas Controller
 *
 * @property Itensloca $Itensloca
 */
class ItenslocasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itensloca->recursive = 0;
		$this->set('itenslocas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itensloca->exists($id)) {
			throw new NotFoundException(__('Invalid itensloca'));
		}
		$options = array('conditions' => array('Itensloca.' . $this->Itensloca->primaryKey => $id));
		$this->set('itensloca', $this->Itensloca->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itensloca->create();
			if ($this->Itensloca->save($this->request->data)) {
				$this->Session->setFlash(__('The itensloca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensloca could not be saved. Please, try again.'));
			}
		}
		$locacaoequipamentos = $this->Itensloca->Locacaoequipamento->find('list');
		$tiposequips = $this->Itensloca->Tiposequip->find('list');
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
		if (!$this->Itensloca->exists($id)) {
			throw new NotFoundException(__('Invalid itensloca'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itensloca->save($this->request->data)) {
				$this->Session->setFlash(__('The itensloca has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensloca could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itensloca.' . $this->Itensloca->primaryKey => $id));
			$this->request->data = $this->Itensloca->find('first', $options);
		}
		$locacaoequipamentos = $this->Itensloca->Locacaoequipamento->find('list');
		$tiposequips = $this->Itensloca->Tiposequip->find('list');
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
		$this->Itensloca->id = $id;
		if (!$this->Itensloca->exists()) {
			throw new NotFoundException(__('Invalid itensloca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itensloca->delete()) {
			$this->Session->setFlash(__('Itensloca deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itensloca was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
