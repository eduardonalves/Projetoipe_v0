<?php
App::uses('AppController', 'Controller');
/**
 * Itenslocacaoequipamentos Controller
 *
 * @property Itenslocacaoequipamento $Itenslocacaoequipamento
 */
class ItenslocacaoequipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itenslocacaoequipamento->recursive = 0;
		$this->set('itenslocacaoequipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itenslocacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itenslocacaoequipamento'));
		}
		$options = array('conditions' => array('Itenslocacaoequipamento.' . $this->Itenslocacaoequipamento->primaryKey => $id));
		$this->set('itenslocacaoequipamento', $this->Itenslocacaoequipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itenslocacaoequipamento->create();
			if ($this->Itenslocacaoequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The itenslocacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itenslocacaoequipamento could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->Itenslocacaoequipamento->Projeto->find('list');
		$equipamentos = $this->Itenslocacaoequipamento->Equipamento->find('list');
		$locacaoequipamentos = $this->loadModel('Locacaoequipamento');
		
		$this->set(compact('projetos', 'equipamentos', 'locacaoequipamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Itenslocacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid itenslocacaoequipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itenslocacaoequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The itenslocacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itenslocacaoequipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itenslocacaoequipamento.' . $this->Itenslocacaoequipamento->primaryKey => $id));
			$this->request->data = $this->Itenslocacaoequipamento->find('first', $options);
		}
		$projetos = $this->Itenslocacaoequipamento->Projeto->find('list');
		$equipamentos = $this->Itenslocacaoequipamento->Equipamento->find('list');
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
		$this->Itenslocacaoequipamento->id = $id;
		if (!$this->Itenslocacaoequipamento->exists()) {
			throw new NotFoundException(__('Invalid itenslocacaoequipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itenslocacaoequipamento->delete()) {
			$this->Session->setFlash(__('Itenslocacaoequipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itenslocacaoequipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
