<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosLocacaofuncionarios Controller
 *
 * @property ProjetosLocacaofuncionario $ProjetosLocacaofuncionario
 */
class ProjetosLocacaofuncionariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosLocacaofuncionario->recursive = 0;
		$this->set('projetosLocacaofuncionarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosLocacaofuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaofuncionario'));
		}
		$options = array('conditions' => array('ProjetosLocacaofuncionario.' . $this->ProjetosLocacaofuncionario->primaryKey => $id));
		$this->set('projetosLocacaofuncionario', $this->ProjetosLocacaofuncionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosLocacaofuncionario->create();
			if ($this->ProjetosLocacaofuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaofuncionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaofuncionario could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosLocacaofuncionario->Projeto->find('list');
		$locacaofuncionarios = $this->ProjetosLocacaofuncionario->Locacaofuncionario->find('list');
		$this->set(compact('projetos', 'locacaofuncionarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosLocacaofuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaofuncionario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosLocacaofuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaofuncionario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaofuncionario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosLocacaofuncionario.' . $this->ProjetosLocacaofuncionario->primaryKey => $id));
			$this->request->data = $this->ProjetosLocacaofuncionario->find('first', $options);
		}
		$projetos = $this->ProjetosLocacaofuncionario->Projeto->find('list');
		$locacaofuncionarios = $this->ProjetosLocacaofuncionario->Locacaofuncionario->find('list');
		$this->set(compact('projetos', 'locacaofuncionarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosLocacaofuncionario->id = $id;
		if (!$this->ProjetosLocacaofuncionario->exists()) {
			throw new NotFoundException(__('Invalid projetos locacaofuncionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosLocacaofuncionario->delete()) {
			$this->Session->setFlash(__('Projetos locacaofuncionario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos locacaofuncionario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
