<?php
App::uses('AppController', 'Controller');
/**
 * Equipamentos Controller
 *
 * @property Equipamento $Equipamento
 */
class EquipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Equipamento->recursive = 0;
		$this->set('equipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equipamento->exists($id)) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		$options = array('conditions' => array('Equipamento.' . $this->Equipamento->primaryKey => $id));
		$this->set('equipamento', $this->Equipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipamento->create();
			if ($this->Equipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamento could not be saved. Please, try again.'));
			}
		}
		$tiposequips = $this->Equipamento->Tiposequip->find('list');
		$projetos = $this->Equipamento->Projeto->find('list');
		$this->set(compact('tiposequips', 'projetos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Equipamento->exists($id)) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Equipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Equipamento.' . $this->Equipamento->primaryKey => $id));
			$this->request->data = $this->Equipamento->find('first', $options);
		}
		$tiposequips = $this->Equipamento->Tiposequip->find('list');
		$projetos = $this->Equipamento->Projeto->find('list');
		$this->set(compact('tiposequips', 'projetos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Equipamento->id = $id;
		if (!$this->Equipamento->exists()) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Equipamento->delete()) {
			$this->Session->setFlash(__('Equipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
