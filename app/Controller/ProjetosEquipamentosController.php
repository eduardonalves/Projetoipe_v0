<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosEquipamentos Controller
 *
 * @property ProjetosEquipamento $ProjetosEquipamento
 */
class ProjetosEquipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosEquipamento->recursive = 0;
		$this->set('projetosEquipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosEquipamento->exists($id)) {
			throw new NotFoundException(__('Invalid projetos equipamento'));
		}
		$options = array('conditions' => array('ProjetosEquipamento.' . $this->ProjetosEquipamento->primaryKey => $id));
		$this->set('projetosEquipamento', $this->ProjetosEquipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosEquipamento->create();
			if ($this->ProjetosEquipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos equipamento could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosEquipamento->Projeto->find('list');
		$equipamentos = $this->ProjetosEquipamento->Equipamento->find('list');
		$this->set(compact('projetos', 'equipamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosEquipamento->exists($id)) {
			throw new NotFoundException(__('Invalid projetos equipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosEquipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos equipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosEquipamento.' . $this->ProjetosEquipamento->primaryKey => $id));
			$this->request->data = $this->ProjetosEquipamento->find('first', $options);
		}
		$projetos = $this->ProjetosEquipamento->Projeto->find('list');
		$equipamentos = $this->ProjetosEquipamento->Equipamento->find('list');
		$this->set(compact('projetos', 'equipamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosEquipamento->id = $id;
		if (!$this->ProjetosEquipamento->exists()) {
			throw new NotFoundException(__('Invalid projetos equipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosEquipamento->delete()) {
			$this->Session->setFlash(__('Projetos equipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos equipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
