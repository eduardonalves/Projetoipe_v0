<?php
App::uses('AppController', 'Controller');
/**
 * Funcionariosmotoristas Controller
 *
 * @property Funcionariosmotorista $Funcionariosmotorista
 */
class FuncionariosmotoristasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Funcionariosmotorista->recursive = 0;
		$this->set('funcionariosmotoristas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcionariosmotorista->exists($id)) {
			throw new NotFoundException(__('Invalid funcionariosmotorista'));
		}
		$options = array('conditions' => array('Funcionariosmotorista.' . $this->Funcionariosmotorista->primaryKey => $id));
		$this->set('funcionariosmotorista', $this->Funcionariosmotorista->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcionariosmotorista->create();
			if ($this->Funcionariosmotorista->save($this->request->data)) {
				$this->Session->setFlash(__('The funcionariosmotorista has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcionariosmotorista could not be saved. Please, try again.'));
			}
		}
		$funcionarios = $this->Funcionariosmotorista->Funcionario->find('list');
		$this->set(compact('funcionarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcionariosmotorista->exists($id)) {
			throw new NotFoundException(__('Invalid funcionariosmotorista'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Funcionariosmotorista->save($this->request->data)) {
				$this->Session->setFlash(__('The funcionariosmotorista has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcionariosmotorista could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Funcionariosmotorista.' . $this->Funcionariosmotorista->primaryKey => $id));
			$this->request->data = $this->Funcionariosmotorista->find('first', $options);
		}
		$funcionarios = $this->Funcionariosmotorista->Funcionario->find('list');
		$this->set(compact('funcionarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcionariosmotorista->id = $id;
		if (!$this->Funcionariosmotorista->exists()) {
			throw new NotFoundException(__('Invalid funcionariosmotorista'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Funcionariosmotorista->delete()) {
			$this->Session->setFlash(__('Funcionariosmotorista deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Funcionariosmotorista was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
