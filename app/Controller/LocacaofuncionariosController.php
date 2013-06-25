<?php
App::uses('AppController', 'Controller');
/**
 * Locacaofuncionarios Controller
 *
 * @property Locacaofuncionario $Locacaofuncionario
 */
class LocacaofuncionariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locacaofuncionario->recursive = 0;
		$this->set('locacaofuncionarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locacaofuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid locacaofuncionario'));
		}
		$options = array('conditions' => array('Locacaofuncionario.' . $this->Locacaofuncionario->primaryKey => $id));
		$this->set('locacaofuncionario', $this->Locacaofuncionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locacaofuncionario->create();
			if ($this->Locacaofuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaofuncionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaofuncionario could not be saved. Please, try again.'));
			}
		}
		$funcionarios = $this->Locacaofuncionario->Funcionario->find('list');
		$projetos = $this->Locacaofuncionario->Projeto->find('list');
		$this->set(compact('funcionarios', 'projetos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locacaofuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid locacaofuncionario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locacaofuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaofuncionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaofuncionario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locacaofuncionario.' . $this->Locacaofuncionario->primaryKey => $id));
			$this->request->data = $this->Locacaofuncionario->find('first', $options);
		}
		$funcionarios = $this->Locacaofuncionario->Funcionario->find('list');
		$projetos = $this->Locacaofuncionario->Projeto->find('list');
		$this->set(compact('funcionarios', 'projetos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locacaofuncionario->id = $id;
		if (!$this->Locacaofuncionario->exists()) {
			throw new NotFoundException(__('Invalid locacaofuncionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locacaofuncionario->delete()) {
			$this->Session->setFlash(__('Locacaofuncionario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaofuncionario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
