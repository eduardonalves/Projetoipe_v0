<?php
App::uses('AppController', 'Controller');
/**
 * Locacaoveiculos Controller
 *
 * @property Locacaoveiculo $Locacaoveiculo
 */
class LocacaoveiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locacaoveiculo->recursive = 0;
		$this->set('locacaoveiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locacaoveiculo->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoveiculo'));
		}
		$options = array('conditions' => array('Locacaoveiculo.' . $this->Locacaoveiculo->primaryKey => $id));
		$this->set('locacaoveiculo', $this->Locacaoveiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locacaoveiculo->create();
			if ($this->Locacaoveiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoveiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoveiculo could not be saved. Please, try again.'));
			}
		}
		$veiculos = $this->Locacaoveiculo->Veiculo->find('list');
		$projetos = $this->Locacaoveiculo->Projeto->find('list');
		$this->set(compact('veiculos', 'projetos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locacaoveiculo->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoveiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locacaoveiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoveiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoveiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locacaoveiculo.' . $this->Locacaoveiculo->primaryKey => $id));
			$this->request->data = $this->Locacaoveiculo->find('first', $options);
		}
		$veiculos = $this->Locacaoveiculo->Veiculo->find('list');
		$projetos = $this->Locacaoveiculo->Projeto->find('list');
		$this->set(compact('veiculos', 'projetos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locacaoveiculo->id = $id;
		if (!$this->Locacaoveiculo->exists()) {
			throw new NotFoundException(__('Invalid locacaoveiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locacaoveiculo->delete()) {
			$this->Session->setFlash(__('Locacaoveiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoveiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
