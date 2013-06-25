<?php
App::uses('AppController', 'Controller');
/**
 * Veiculocustos Controller
 *
 * @property Veiculocusto $Veiculocusto
 */
class VeiculocustosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Veiculocusto->recursive = 0;
		$this->set('veiculocustos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veiculocusto->exists($id)) {
			throw new NotFoundException(__('Invalid veiculocusto'));
		}
		$options = array('conditions' => array('Veiculocusto.' . $this->Veiculocusto->primaryKey => $id));
		$this->set('veiculocusto', $this->Veiculocusto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veiculocusto->create();
			if ($this->Veiculocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculocusto could not be saved. Please, try again.'));
			}
		}
		$veiculos = $this->Veiculocusto->Veiculo->find('list');
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
		if (!$this->Veiculocusto->exists($id)) {
			throw new NotFoundException(__('Invalid veiculocusto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veiculocusto->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculocusto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculocusto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Veiculocusto.' . $this->Veiculocusto->primaryKey => $id));
			$this->request->data = $this->Veiculocusto->find('first', $options);
		}
		$veiculos = $this->Veiculocusto->Veiculo->find('list');
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
		$this->Veiculocusto->id = $id;
		if (!$this->Veiculocusto->exists()) {
			throw new NotFoundException(__('Invalid veiculocusto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Veiculocusto->delete()) {
			$this->Session->setFlash(__('Veiculocusto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Veiculocusto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
