<?php
App::uses('AppController', 'Controller');
/**
 * Veiculomanutes Controller
 *
 * @property Veiculomanute $Veiculomanute
 */
class VeiculomanutesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Veiculomanute->recursive = 0;
		$this->set('veiculomanutes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veiculomanute->exists($id)) {
			throw new NotFoundException(__('Invalid veiculomanute'));
		}
		$options = array('conditions' => array('Veiculomanute.' . $this->Veiculomanute->primaryKey => $id));
		$this->set('veiculomanute', $this->Veiculomanute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veiculomanute->create();
			if ($this->Veiculomanute->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculomanute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculomanute could not be saved. Please, try again.'));
			}
		}
		$veiculos = $this->Veiculomanute->Veiculo->find('list');
		$this->set(compact('veiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Veiculomanute->exists($id)) {
			throw new NotFoundException(__('Invalid veiculomanute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veiculomanute->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculomanute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculomanute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Veiculomanute.' . $this->Veiculomanute->primaryKey => $id));
			$this->request->data = $this->Veiculomanute->find('first', $options);
		}
		$veiculos = $this->Veiculomanute->Veiculo->find('list');
		$this->set(compact('veiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Veiculomanute->id = $id;
		if (!$this->Veiculomanute->exists()) {
			throw new NotFoundException(__('Invalid veiculomanute'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Veiculomanute->delete()) {
			$this->Session->setFlash(__('Veiculomanute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Veiculomanute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
