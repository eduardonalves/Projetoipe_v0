<?php
App::uses('AppController', 'Controller');
/**
 * LocacaotiposequipsTiposequips Controller
 *
 * @property LocacaotiposequipsTiposequip $LocacaotiposequipsTiposequip
 */
class LocacaotiposequipsTiposequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LocacaotiposequipsTiposequip->recursive = 0;
		$this->set('locacaotiposequipsTiposequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocacaotiposequipsTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaotiposequips tiposequip'));
		}
		$options = array('conditions' => array('LocacaotiposequipsTiposequip.' . $this->LocacaotiposequipsTiposequip->primaryKey => $id));
		$this->set('locacaotiposequipsTiposequip', $this->LocacaotiposequipsTiposequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LocacaotiposequipsTiposequip->create();
			if ($this->LocacaotiposequipsTiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaotiposequips tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaotiposequips tiposequip could not be saved. Please, try again.'));
			}
		}
		$locacaotiposequips = $this->LocacaotiposequipsTiposequip->Locacaotiposequip->find('list');
		$tiposequips = $this->LocacaotiposequipsTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaotiposequips', 'tiposequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocacaotiposequipsTiposequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaotiposequips tiposequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocacaotiposequipsTiposequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaotiposequips tiposequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaotiposequips tiposequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocacaotiposequipsTiposequip.' . $this->LocacaotiposequipsTiposequip->primaryKey => $id));
			$this->request->data = $this->LocacaotiposequipsTiposequip->find('first', $options);
		}
		$locacaotiposequips = $this->LocacaotiposequipsTiposequip->Locacaotiposequip->find('list');
		$tiposequips = $this->LocacaotiposequipsTiposequip->Tiposequip->find('list');
		$this->set(compact('locacaotiposequips', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocacaotiposequipsTiposequip->id = $id;
		if (!$this->LocacaotiposequipsTiposequip->exists()) {
			throw new NotFoundException(__('Invalid locacaotiposequips tiposequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocacaotiposequipsTiposequip->delete()) {
			$this->Session->setFlash(__('Locacaotiposequips tiposequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaotiposequips tiposequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
