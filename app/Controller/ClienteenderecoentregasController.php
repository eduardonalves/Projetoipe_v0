<?php
App::uses('AppController', 'Controller');
/**
 * Clienteenderecoentregas Controller
 *
 * @property Clienteenderecoentrega $Clienteenderecoentrega
 */
class ClienteenderecoentregasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clienteenderecoentrega->recursive = 0;
		$this->set('clienteenderecoentregas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clienteenderecoentrega->exists($id)) {
			throw new NotFoundException(__('Invalid clienteenderecoentrega'));
		}
		$options = array('conditions' => array('Clienteenderecoentrega.' . $this->Clienteenderecoentrega->primaryKey => $id));
		$this->set('clienteenderecoentrega', $this->Clienteenderecoentrega->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clienteenderecoentrega->create();
			if ($this->Clienteenderecoentrega->save($this->request->data)) {
				$this->Session->setFlash(__('The clienteenderecoentrega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clienteenderecoentrega could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Clienteenderecoentrega->Cliente->find('list');
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
		if (!$this->Clienteenderecoentrega->exists($id)) {
			throw new NotFoundException(__('Invalid clienteenderecoentrega'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clienteenderecoentrega->save($this->request->data)) {
				$this->Session->setFlash(__('The clienteenderecoentrega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clienteenderecoentrega could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clienteenderecoentrega.' . $this->Clienteenderecoentrega->primaryKey => $id));
			$this->request->data = $this->Clienteenderecoentrega->find('first', $options);
		}
		$clientes = $this->Clienteenderecoentrega->Cliente->find('list');
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
		$this->Clienteenderecoentrega->id = $id;
		if (!$this->Clienteenderecoentrega->exists()) {
			throw new NotFoundException(__('Invalid clienteenderecoentrega'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Clienteenderecoentrega->delete()) {
			$this->Session->setFlash(__('Clienteenderecoentrega deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clienteenderecoentrega was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
