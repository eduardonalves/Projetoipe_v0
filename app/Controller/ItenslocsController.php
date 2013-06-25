<?php
App::uses('AppController', 'Controller');
/**
 * Itenslocs Controller
 *
 * @property Itensloc $Itensloc
 */
class ItenslocsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itensloc->recursive = 0;
		$this->set('itenslocs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itensloc->exists($id)) {
			throw new NotFoundException(__('Invalid itensloc'));
		}
		$options = array('conditions' => array('Itensloc.' . $this->Itensloc->primaryKey => $id));
		$this->set('itensloc', $this->Itensloc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itensloc->create();
			if ($this->Itensloc->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The itensloc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensloc could not be saved. Please, try again.'));
			}
		}
		$locacaoequipamentos = $this->Itensloc->Locacaoequipamento->find('list');
		$tiposequips = $this->Itensloc->Tiposequip->find('list');
		$this->set(compact('locacaoequipamentos', 'tiposequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Itensloc->exists($id)) {
			throw new NotFoundException(__('Invalid itensloc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itensloc->save($this->request->data)) {
				$this->Session->setFlash(__('The itensloc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itensloc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itensloc.' . $this->Itensloc->primaryKey => $id));
			$this->request->data = $this->Itensloc->find('first', $options);
		}
		$locacaoequipamentos = $this->Itensloc->Locacaoequipamento->find('list');
		$tiposequips = $this->Itensloc->Tiposequip->find('list');
		$this->set(compact('locacaoequipamentos', 'tiposequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Itensloc->id = $id;
		if (!$this->Itensloc->exists()) {
			throw new NotFoundException(__('Invalid itensloc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itensloc->delete()) {
			$this->Session->setFlash(__('Itensloc deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itensloc was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
