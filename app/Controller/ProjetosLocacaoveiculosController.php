<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosLocacaoveiculos Controller
 *
 * @property ProjetosLocacaoveiculo $ProjetosLocacaoveiculo
 */
class ProjetosLocacaoveiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosLocacaoveiculo->recursive = 0;
		$this->set('projetosLocacaoveiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosLocacaoveiculo->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaoveiculo'));
		}
		$options = array('conditions' => array('ProjetosLocacaoveiculo.' . $this->ProjetosLocacaoveiculo->primaryKey => $id));
		$this->set('projetosLocacaoveiculo', $this->ProjetosLocacaoveiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosLocacaoveiculo->create();
			if ($this->ProjetosLocacaoveiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaoveiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaoveiculo could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosLocacaoveiculo->Projeto->find('list');
		$locacaoveiculos = $this->ProjetosLocacaoveiculo->Locacaoveiculo->find('list');
		$this->set(compact('projetos', 'locacaoveiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosLocacaoveiculo->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaoveiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosLocacaoveiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaoveiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaoveiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosLocacaoveiculo.' . $this->ProjetosLocacaoveiculo->primaryKey => $id));
			$this->request->data = $this->ProjetosLocacaoveiculo->find('first', $options);
		}
		$projetos = $this->ProjetosLocacaoveiculo->Projeto->find('list');
		$locacaoveiculos = $this->ProjetosLocacaoveiculo->Locacaoveiculo->find('list');
		$this->set(compact('projetos', 'locacaoveiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosLocacaoveiculo->id = $id;
		if (!$this->ProjetosLocacaoveiculo->exists()) {
			throw new NotFoundException(__('Invalid projetos locacaoveiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosLocacaoveiculo->delete()) {
			$this->Session->setFlash(__('Projetos locacaoveiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos locacaoveiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
