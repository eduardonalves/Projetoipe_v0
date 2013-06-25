<?php
App::uses('AppController', 'Controller');
/**
 * Veiculos Controller
 *
 * @property Veiculo $Veiculo
 */
class VeiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Veiculo->recursive = 0;
		$this->set('veiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
		$this->set('veiculo', $this->Veiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veiculo->create();
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.'));
			}
		}
		$fretes = $this->Veiculo->Frete->find('list');
		$projetos = $this->Veiculo->Projeto->find('list');
		$this->set(compact('fretes', 'projetos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
			$this->request->data = $this->Veiculo->find('first', $options);
		}
		$fretes = $this->Veiculo->Frete->find('list');
		$projetos = $this->Veiculo->Projeto->find('list');
		$this->set(compact('fretes', 'projetos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Veiculo->id = $id;
		if (!$this->Veiculo->exists()) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Veiculo->delete()) {
			$this->Session->setFlash(__('Veiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Veiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
