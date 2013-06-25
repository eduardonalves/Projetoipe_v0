<?php
App::uses('AppController', 'Controller');
/**
 * Usinas Controller
 *
 * @property Usina $Usina
 */
class UsinasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usina->recursive = 0;
		$this->set('usinas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usina->exists($id)) {
			throw new NotFoundException(__('Invalid usina'));
		}
		$options = array('conditions' => array('Usina.' . $this->Usina->primaryKey => $id));
		$this->set('usina', $this->Usina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usina->create();
			if ($this->Usina->save($this->request->data)) {
				$this->Session->setFlash(__('The usina has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usina could not be saved. Please, try again.'));
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
		if (!$this->Usina->exists($id)) {
			throw new NotFoundException(__('Invalid usina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usina->save($this->request->data)) {
				$this->Session->setFlash(__('The usina has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usina.' . $this->Usina->primaryKey => $id));
			$this->request->data = $this->Usina->find('first', $options);
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
		$this->Usina->id = $id;
		if (!$this->Usina->exists()) {
			throw new NotFoundException(__('Invalid usina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usina->delete()) {
			$this->Session->setFlash(__('Usina deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usina was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
