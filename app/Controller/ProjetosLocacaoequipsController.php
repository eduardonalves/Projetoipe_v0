<?php
App::uses('AppController', 'Controller');
/**
 * ProjetosLocacaoequips Controller
 *
 * @property ProjetosLocacaoequip $ProjetosLocacaoequip
 */
class ProjetosLocacaoequipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjetosLocacaoequip->recursive = 0;
		$this->set('projetosLocacaoequips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjetosLocacaoequip->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaoequip'));
		}
		$options = array('conditions' => array('ProjetosLocacaoequip.' . $this->ProjetosLocacaoequip->primaryKey => $id));
		$this->set('projetosLocacaoequip', $this->ProjetosLocacaoequip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjetosLocacaoequip->create();
			if ($this->ProjetosLocacaoequip->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaoequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaoequip could not be saved. Please, try again.'));
			}
		}
		$projetos = $this->ProjetosLocacaoequip->Projeto->find('list');
		$locacaoequips = $this->ProjetosLocacaoequip->Locacaoequip->find('list');
		$this->set(compact('projetos', 'locacaoequips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjetosLocacaoequip->exists($id)) {
			throw new NotFoundException(__('Invalid projetos locacaoequip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjetosLocacaoequip->save($this->request->data)) {
				$this->Session->setFlash(__('The projetos locacaoequip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projetos locacaoequip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjetosLocacaoequip.' . $this->ProjetosLocacaoequip->primaryKey => $id));
			$this->request->data = $this->ProjetosLocacaoequip->find('first', $options);
		}
		$projetos = $this->ProjetosLocacaoequip->Projeto->find('list');
		$locacaoequips = $this->ProjetosLocacaoequip->Locacaoequip->find('list');
		$this->set(compact('projetos', 'locacaoequips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjetosLocacaoequip->id = $id;
		if (!$this->ProjetosLocacaoequip->exists()) {
			throw new NotFoundException(__('Invalid projetos locacaoequip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjetosLocacaoequip->delete()) {
			$this->Session->setFlash(__('Projetos locacaoequip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projetos locacaoequip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
