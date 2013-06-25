<?php
App::uses('AppController', 'Controller');
/**
 * Funcionarios Controller
 *
 * @property Funcionario $Funcionario
 */
class FuncionariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Funcionario->recursive = 0;
		$this->set('funcionarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
		$this->set('funcionario', $this->Funcionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcionario->create();
			if ($this->Funcionario->save($this->request->data)) {
				$this->Session->setFlash(__('The funcionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcionario could not be saved. Please, try again.'));
			}
		}
		$usinas = $this->Funcionario->Usina->find('list');
		$this->set(compact('usinas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Funcionario->save($this->request->data)) {
				$this->Session->setFlash(__('The funcionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcionario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
			$this->request->data = $this->Funcionario->find('first', $options);
		}
		$usinas = $this->Funcionario->Usina->find('list');
		$this->set(compact('usinas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcionario->id = $id;
		if (!$this->Funcionario->exists()) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Funcionario->delete()) {
			$this->Session->setFlash(__('Funcionario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Funcionario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
