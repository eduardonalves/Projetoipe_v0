<?php
App::uses('AppController', 'Controller');
/**
 * Equipamentomanutes Controller
 *
 * @property Equipamentomanute $Equipamentomanute
 */
class EquipamentomanutesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Equipamentomanute->recursive = 0;
		$this->set('equipamentomanutes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equipamentomanute->exists($id)) {
			throw new NotFoundException(__('Invalid equipamentomanute'));
		}
		$options = array('conditions' => array('Equipamentomanute.' . $this->Equipamentomanute->primaryKey => $id));
		$this->set('equipamentomanute', $this->Equipamentomanute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipamentomanute->create();
			if ($this->Equipamentomanute->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamentomanute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamentomanute could not be saved. Please, try again.'));
			}
		}
		$equipamentos = $this->Equipamentomanute->Equipamento->find('list');
		$this->set(compact('equipamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Equipamentomanute->exists($id)) {
			throw new NotFoundException(__('Invalid equipamentomanute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Equipamentomanute->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamentomanute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamentomanute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Equipamentomanute.' . $this->Equipamentomanute->primaryKey => $id));
			$this->request->data = $this->Equipamentomanute->find('first', $options);
		}
		$equipamentos = $this->Equipamentomanute->Equipamento->find('list');
		$this->set(compact('equipamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Equipamentomanute->id = $id;
		if (!$this->Equipamentomanute->exists()) {
			throw new NotFoundException(__('Invalid equipamentomanute'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Equipamentomanute->delete()) {
			$this->Session->setFlash(__('Equipamentomanute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipamentomanute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
