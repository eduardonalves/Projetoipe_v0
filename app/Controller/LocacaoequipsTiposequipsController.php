<?php
App::uses('AppController', 'Controller');
/**
 * LocacaoequipsTiposequips Controller
 *
 * @property LocacaoequipsTiposequip $LocacaoequipsTiposequip
 */
class LocacaoequipsTiposequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LocacaoequipsTiposequip->recursive = 0;
		$this->set('locacaoequipsTiposequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocacaoequipsTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips tiposequip'));
		}
		$options = array('conditions' => array('LocacaoequipsTiposequip.' . $this->LocacaoequipsTiposequip->primaryKey => $id));
		$this->set('locacaoequipsTiposequip', $this->LocacaoequipsTiposequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LocacaoequipsTiposequip->create();
			if ($this->LocacaoequipsTiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips tiposequip could not be saved. Please, try again.'));
			}
		}
		$locacaoequips = $this->LocacaoequipsTiposequip->Locacaoequip->find('list');
		$tiposequips = $this->LocacaoequipsTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaoequips', 'tiposequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocacaoequipsTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips tiposequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocacaoequipsTiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips tiposequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocacaoequipsTiposequip.' . $this->LocacaoequipsTiposequip->primaryKey => $id));
			$this->request->data = $this->LocacaoequipsTiposequip->find('first', $options);
		}
		$locacaoequips = $this->LocacaoequipsTiposequip->Locacaoequip->find('list');
		$tiposequips = $this->LocacaoequipsTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaoequips', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocacaoequipsTiposequip->id = $id;
		if (!$this->LocacaoequipsTiposequip->exists()) {
			throw new NotFoundException(__('Invalid locacaoequips tiposequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocacaoequipsTiposequip->delete()) {
			$this->Session->setFlash(__('Locacaoequips tiposequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequips tiposequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
