<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosFuncionarios Controller
 *
 * @property ProjetosFuncionario $ProjetosFuncionario
 */
class ProjetosFuncionariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosFuncionario->recursive = 0;
		$this->set('projetosFuncionarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosFuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid projetos funcionario'));
		}
		$options = array('conditions' => array('ProjetosFuncionario.' . $this->ProjetosFuncionario->primaryKey => $id));
		$this->set('projetosFuncionario', $this->ProjetosFuncionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosFuncionario->create();
			if ($this->ProjetosFuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos funcionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos funcionario could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosFuncionario->Projeto->find('list');
		$funcionarios = $this->ProjetosFuncionario->Funcionario->find('list');
		$this->set(compact('projetos', 'funcionarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosFuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid projetos funcionario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosFuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos funcionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos funcionario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosFuncionario.' . $this->ProjetosFuncionario->primaryKey => $id));
			$this->request->data = $this->ProjetosFuncionario->find('first', $options);
		}
		$projetos = $this->ProjetosFuncionario->Projeto->find('list');
		$funcionarios = $this->ProjetosFuncionario->Funcionario->find('list');
		$this->set(compact('projetos', 'funcionarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosFuncionario->id = $id;
		if (!$this->ProjetosFuncionario->exists()) {
			throw new NotFoundException(__('Invalid projetos funcionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosFuncionario->delete()) {
			$this->Session->setFlash(__('Projetos funcionario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos funcionario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
