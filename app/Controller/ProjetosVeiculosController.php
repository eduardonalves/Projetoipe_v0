<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosVeiculos Controller
 *
 * @property ProjetosVeiculo $ProjetosVeiculo
 */
class ProjetosVeiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosVeiculo->recursive = 0;
		$this->set('projetosVeiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosVeiculo->exists($id)) {
			throw new NotFoundException(__('Invalid projetos veiculo'));
		}
		$options = array('conditions' => array('ProjetosVeiculo.' . $this->ProjetosVeiculo->primaryKey => $id));
		$this->set('projetosVeiculo', $this->ProjetosVeiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosVeiculo->create();
			if ($this->ProjetosVeiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos veiculo could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosVeiculo->Projeto->find('list');
		$veiculos = $this->ProjetosVeiculo->Veiculo->find('list');
		$this->set(compact('projetos', 'veiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosVeiculo->exists($id)) {
			throw new NotFoundException(__('Invalid projetos veiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosVeiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos veiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosVeiculo.' . $this->ProjetosVeiculo->primaryKey => $id));
			$this->request->data = $this->ProjetosVeiculo->find('first', $options);
		}
		$projetos = $this->ProjetosVeiculo->Projeto->find('list');
		$veiculos = $this->ProjetosVeiculo->Veiculo->find('list');
		$this->set(compact('projetos', 'veiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosVeiculo->id = $id;
		if (!$this->ProjetosVeiculo->exists()) {
			throw new NotFoundException(__('Invalid projetos veiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosVeiculo->delete()) {
			$this->Session->setFlash(__('Projetos veiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos veiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
