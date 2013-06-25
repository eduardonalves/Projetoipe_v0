<?php
App::uses('AppController', 'Controller');
/**
 * Multas Controller
 *
 * @property Multa $Multa
 */
class MultasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Multa->recursive = 0;
		$this->set('multas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Multa->exists($id)) {
			throw new NotFoundException(__('Invalid multa'));
		}
		$options = array('conditions' => array('Multa.' . $this->Multa->primaryKey => $id));
		$this->set('multa', $this->Multa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Multa->create();
			if ($this->Multa->save($this->request->data)) {
				$this->Session->setFlash(__('The multa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multa could not be saved. Please, try again.'));
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
		if (!$this->Multa->exists($id)) {
			throw new NotFoundException(__('Invalid multa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Multa->save($this->request->data)) {
				$this->Session->setFlash(__('The multa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Multa.' . $this->Multa->primaryKey => $id));
			$this->request->data = $this->Multa->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Multa->id = $id;
		if (!$this->Multa->exists()) {
			throw new NotFoundException(__('Invalid multa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Multa->delete()) {
			$this->Session->setFlash(__('Multa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Multa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
