<?php
App::uses('AppController', 'Controller');
/**
 * Tiposequips Controller
 *
 * @property Tiposequip $Tiposequip
 */
class TiposequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tiposequip->recursive = 0;
		$this->set('tiposequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid tiposequip'));
		}
		$options = array('conditions' => array('Tiposequip.' . $this->Tiposequip->primaryKey => $id));
		$this->set('tiposequip', $this->Tiposequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tiposequip->create();
			if ($this->Tiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiposequip could not be saved. Please, try again.'));
			}
		}
		$locacaoequipamentos = $this->Tiposequip->Locacaoequipamento->find('list');
		$this->set(compact('locacaoequipamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid tiposequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiposequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tiposequip.' . $this->Tiposequip->primaryKey => $id));
			$this->request->data = $this->Tiposequip->find('first', $options);
		}
		$locacaoequipamentos = $this->Tiposequip->Locacaoequipamento->find('list');
		$this->set(compact('locacaoequipamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tiposequip->id = $id;
		if (!$this->Tiposequip->exists()) {
			throw new NotFoundException(__('Invalid tiposequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tiposequip->delete()) {
			$this->Session->setFlash(__('Tiposequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tiposequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
