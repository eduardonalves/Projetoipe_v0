<?php
App::uses('AppController', 'Controller');
/**
 * Locacaoequips Controller
 *
 * @property Locacaoequip $Locacaoequip
 */
class LocacaoequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locacaoequip->recursive = 0;
		$this->set('locacaoequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locacaoequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequip'));
		}
		$options = array('conditions' => array('Locacaoequip.' . $this->Locacaoequip->primaryKey => $id));
		$this->set('locacaoequip', $this->Locacaoequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locacaoequip->create();
			if ($this->Locacaoequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequip could not be saved. Please, try again.'));
			}
		}
		$equipamentos = $this->Locacaoequip->Equipamento->find('list');
		$projetos = $this->Locacaoequip->Projeto->find('list');
		$this->set(compact('equipamentos', 'projetos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locacaoequip->exists($id)) {
			throw new NotFoundException(__('Invalid locacaoequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locacaoequip->save($this->request->data)) {
				$this->Session->setFlash(__('The locacaoequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locacaoequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locacaoequip.' . $this->Locacaoequip->primaryKey => $id));
			$this->request->data = $this->Locacaoequip->find('first', $options);
		}
		$equipamentos = $this->Locacaoequip->Equipamento->find('list');
		$projetos = $this->Locacaoequip->Projeto->find('list');
		$this->set(compact('equipamentos', 'projetos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locacaoequip->id = $id;
		if (!$this->Locacaoequip->exists()) {
			throw new NotFoundException(__('Invalid locacaoequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locacaoequip->delete()) {
			$this->Session->setFlash(__('Locacaoequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locacaoequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
