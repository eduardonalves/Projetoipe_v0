<?php
App::uses('AppController', 'Controller');
/**
 * LocacaoequipsEquipamentos Controller
 *
 * @property LocacaoequipsEquipamento $LocacaoequipsEquipamento
 */
class LocacaoequipsEquipamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LocacaoequipsEquipamento->recursive = 0;
		$this->set('locacaoequipsEquipamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocacaoequipsEquipamento->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips equipamento'));
		}
		$options = array('conditions' => array('LocacaoequipsEquipamento.' . $this->LocacaoequipsEquipamento->primaryKey => $id));
		$this->set('locacaoequipsEquipamento', $this->LocacaoequipsEquipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LocacaoequipsEquipamento->create();
			if ($this->LocacaoequipsEquipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips equipamento could not be saved. Please, try again.'));
			}
		}
		$locacaoequips = $this->LocacaoequipsEquipamento->Locacaoequip->find('list');
		$equipamentos = $this->LocacaoequipsEquipamento->Equipamento->find('list');
		$this->set(compact('locacaoequips', 'equipamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocacaoequipsEquipamento->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips equipamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocacaoequipsEquipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips equipamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips equipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocacaoequipsEquipamento.' . $this->LocacaoequipsEquipamento->primaryKey => $id));
			$this->request->data = $this->LocacaoequipsEquipamento->find('first', $options);
		}
		$locacaoequips = $this->LocacaoequipsEquipamento->Locacaoequip->find('list');
		$equipamentos = $this->LocacaoequipsEquipamento->Equipamento->find('list');
		$this->set(compact('locacaoequips', 'equipamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocacaoequipsEquipamento->id = $id;
		if (!$this->LocacaoequipsEquipamento->exists()) {
			throw new NotFoundException(__('Invalid locacaoequips equipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocacaoequipsEquipamento->delete()) {
			$this->Session->setFlash(__('Locacaoequips equipamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequips equipamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
