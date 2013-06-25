<?php
App::uses('AppController', 'Controller');
/**
 * Locacaotiposequips Controller
 *
 * @property Locacaotiposequip $Locacaotiposequip
 */
class LocacaotiposequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locacaotiposequip->recursive = 0;
		$this->set('locacaotiposequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locacaotiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaotiposequip'));
		}
		$options = array('conditions' => array('Locacaotiposequip.' . $this->Locacaotiposequip->primaryKey => $id));
		$this->set('locacaotiposequip', $this->Locacaotiposequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locacaotiposequip->create();
			if ($this->Locacaotiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaotiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaotiposequip could not be saved. Please, try again.'));
			}
		}
		$users = $this->Locacaotiposequip->User->find('list');
		$tiposequips = $this->Locacaotiposequip->Tiposequip->find('list');
		$this->set(compact('users', 'tiposequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locacaotiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaotiposequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locacaotiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaotiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaotiposequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locacaotiposequip.' . $this->Locacaotiposequip->primaryKey => $id));
			$this->request->data = $this->Locacaotiposequip->find('first', $options);
		}
		$users = $this->Locacaotiposequip->User->find('list');
		$tiposequips = $this->Locacaotiposequip->Tiposequip->find('list');
		$this->set(compact('users', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locacaotiposequip->id = $id;
		if (!$this->Locacaotiposequip->exists()) {
			throw new NotFoundException(__('Invalid locacaotiposequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locacaotiposequip->delete()) {
			$this->Session->setFlash(__('Locacaotiposequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaotiposequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
