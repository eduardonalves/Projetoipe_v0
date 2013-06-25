<?php
App::uses('AppController', 'Controller');
/**
 * Equipamentocustos Controller
 *
 * @property Equipamentocusto $Equipamentocusto
 */
class EquipamentocustosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Equipamentocusto->recursive = 0;
		$this->set('equipamentocustos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equipamentocusto->exists($id)) {
			throw new NotFoundException(__('Invalid equipamentocusto'));
		}
		$options = array('conditions' => array('Equipamentocusto.' . $this->Equipamentocusto->primaryKey => $id));
		$this->set('equipamentocusto', $this->Equipamentocusto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipamentocusto->create();
			if ($this->Equipamentocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamentocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamentocusto could not be saved. Please, try again.'));
			}
		}
		$equipamentos = $this->Equipamentocusto->Equipamento->find('list');
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
		if (!$this->Equipamentocusto->exists($id)) {
			throw new NotFoundException(__('Invalid equipamentocusto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Equipamentocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamentocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamentocusto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Equipamentocusto.' . $this->Equipamentocusto->primaryKey => $id));
			$this->request->data = $this->Equipamentocusto->find('first', $options);
		}
		$equipamentos = $this->Equipamentocusto->Equipamento->find('list');
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
		$this->Equipamentocusto->id = $id;
		if (!$this->Equipamentocusto->exists()) {
			throw new NotFoundException(__('Invalid equipamentocusto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Equipamentocusto->delete()) {
			$this->Session->setFlash(__('Equipamentocusto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipamentocusto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
