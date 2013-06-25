<?php
App::uses('AppController', 'Controller');
/**
 * Rotas Controller
 *
 * @property Rota $Rota
 */
class RotasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rota->recursive = 0;
		$this->set('rotas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rota->exists($id)) {
			throw new NotFoundException(__('Invalid rota'));
		}
		$options = array('conditions' => array('Rota.' . $this->Rota->primaryKey => $id));
		$this->set('rota', $this->Rota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rota->create();
			if ($this->Rota->save($this->request->data)) {
				$this->Session->setFlash(__('The rota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rota could not be saved. Please, try again.'));
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
		if (!$this->Rota->exists($id)) {
			throw new NotFoundException(__('Invalid rota'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rota->save($this->request->data)) {
				$this->Session->setFlash(__('The rota has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rota could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rota.' . $this->Rota->primaryKey => $id));
			$this->request->data = $this->Rota->find('first', $options);
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
		$this->Rota->id = $id;
		if (!$this->Rota->exists()) {
			throw new NotFoundException(__('Invalid rota'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rota->delete()) {
			$this->Session->setFlash(__('Rota deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rota was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
