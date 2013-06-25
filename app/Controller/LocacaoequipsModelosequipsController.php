<?php
App::uses('AppController', 'Controller');
/**
 * LocacaoequipsModelosequips Controller
 *
 * @property LocacaoequipsModelosequip $LocacaoequipsModelosequip
 */
class LocacaoequipsModelosequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LocacaoequipsModelosequip->recursive = 0;
		$this->set('locacaoequipsModelosequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocacaoequipsModelosequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips modelosequip'));
		}
		$options = array('conditions' => array('LocacaoequipsModelosequip.' . $this->LocacaoequipsModelosequip->primaryKey => $id));
		$this->set('locacaoequipsModelosequip', $this->LocacaoequipsModelosequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LocacaoequipsModelosequip->create();
			if ($this->LocacaoequipsModelosequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips modelosequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips modelosequip could not be saved. Please, try again.'));
			}
		}
		$locacaoequips = $this->LocacaoequipsModelosequip->Locacaoequip->find('list');
		$modelosequips = $this->LocacaoequipsModelosequip->Modelosequip->find('list');
		$this->set(compact('locacaoequips', 'modelosequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocacaoequipsModelosequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequips modelosequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocacaoequipsModelosequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequips modelosequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequips modelosequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocacaoequipsModelosequip.' . $this->LocacaoequipsModelosequip->primaryKey => $id));
			$this->request->data = $this->LocacaoequipsModelosequip->find('first', $options);
		}
		$locacaoequips = $this->LocacaoequipsModelosequip->Locacaoequip->find('list');
		$modelosequips = $this->LocacaoequipsModelosequip->Modelosequip->find('list');
		$this->set(compact('locacaoequips', 'modelosequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocacaoequipsModelosequip->id = $id;
		if (!$this->LocacaoequipsModelosequip->exists()) {
			throw new NotFoundException(__('Invalid locacaoequips modelosequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocacaoequipsModelosequip->delete()) {
			$this->Session->setFlash(__('Locacaoequips modelosequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequips modelosequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
