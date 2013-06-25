<?php
App::uses('AppController', 'Controller');
/**
 * Clientecontatos Controller
 *
 * @property Clientecontato $Clientecontato
 */
class ClientecontatosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clientecontato->recursive = 0;
		$this->set('clientecontatos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clientecontato->exists($id)) {
			throw new NotFoundException(__('Invalid clientecontato'));
		}
		$options = array('conditions' => array('Clientecontato.' . $this->Clientecontato->primaryKey => $id));
		$this->set('clientecontato', $this->Clientecontato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clientecontato->create();
			if ($this->Clientecontato->save($this->request->data)) {
				$this->Session->setFlash(__('The clientecontato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientecontato could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Clientecontato->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Clientecontato->exists($id)) {
			throw new NotFoundException(__('Invalid clientecontato'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clientecontato->save($this->request->data)) {
				$this->Session->setFlash(__('The clientecontato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientecontato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clientecontato.' . $this->Clientecontato->primaryKey => $id));
			$this->request->data = $this->Clientecontato->find('first', $options);
		}
		$clientes = $this->Clientecontato->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Clientecontato->id = $id;
		if (!$this->Clientecontato->exists()) {
			throw new NotFoundException(__('Invalid clientecontato'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Clientecontato->delete()) {
			$this->Session->setFlash(__('Clientecontato deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clientecontato was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
