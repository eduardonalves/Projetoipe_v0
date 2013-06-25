<?php
App::uses('AppController', 'Controller');
/**
 * Modelosequips Controller
 *
 * @property Modelosequip $Modelosequip
 */
class ModelosequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Modelosequip->recursive = 0;
		$this->set('modelosequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modelosequip->exists($id)) {
			throw new NotFoundException(__('Invalid modelosequip'));
		}
		$options = array('conditions' => array('Modelosequip.' . $this->Modelosequip->primaryKey => $id));
		$this->set('modelosequip', $this->Modelosequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modelosequip->create();
			if ($this->Modelosequip->save($this->request->data)) {
				$this->Session->setFlash(__('The modelosequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelosequip could not be saved. Please, try again.'));
			}
		}
		$locacaoequips = $this->Modelosequip->Locacaoequip->find('list');
		$this->set(compact('locacaoequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Modelosequip->exists($id)) {
			throw new NotFoundException(__('Invalid modelosequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelosequip->save($this->request->data)) {
				$this->Session->setFlash(__('The modelosequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelosequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Modelosequip.' . $this->Modelosequip->primaryKey => $id));
			$this->request->data = $this->Modelosequip->find('first', $options);
		}
		$locacaoequips = $this->Modelosequip->Locacaoequip->find('list');
		$this->set(compact('locacaoequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Modelosequip->id = $id;
		if (!$this->Modelosequip->exists()) {
			throw new NotFoundException(__('Invalid modelosequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Modelosequip->delete()) {
			$this->Session->setFlash(__('Modelosequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modelosequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
