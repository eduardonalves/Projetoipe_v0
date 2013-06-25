<?php
App::uses('AppController', 'Controller');
/**
 * Alocacaoequipamentos Controller
 *
 * @property Alocacaoequipamento $Alocacaoequipamento
 */
class AlocacaoequipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Alocacaoequipamento->recursive = 0;
		$this->set('alocacaoequipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alocacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid alocacaoequipamento'));
		}
		$options = array('conditions' => array('Alocacaoequipamento.' . $this->Alocacaoequipamento->primaryKey => $id));
		$this->set('alocacaoequipamento', $this->Alocacaoequipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alocacaoequipamento->create();
			if ($this->Alocacaoequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The alocacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alocacaoequipamento could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->Alocacaoequipamento->Projeto->find('list');
		$users = $this->Alocacaoequipamento->User->find('list');
		$this->set(compact('projetos', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alocacaoequipamento->exists($id)) {
			throw new NotFoundException(__('Invalid alocacaoequipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Alocacaoequipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The alocacaoequipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alocacaoequipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alocacaoequipamento.' . $this->Alocacaoequipamento->primaryKey => $id));
			$this->request->data = $this->Alocacaoequipamento->find('first', $options);
		}
		$projetos = $this->Alocacaoequipamento->Projeto->find('list');
		$users = $this->Alocacaoequipamento->User->find('list');
		$this->set(compact('projetos', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alocacaoequipamento->id = $id;
		if (!$this->Alocacaoequipamento->exists()) {
			throw new NotFoundException(__('Invalid alocacaoequipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Alocacaoequipamento->delete()) {
			$this->Session->setFlash(__('Alocacaoequipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Alocacaoequipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
