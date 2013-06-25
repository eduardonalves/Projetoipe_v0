<?php
App::uses('AppController', 'Controller');
/**
 * Rotashorariostrafegos Controller
 *
 * @property Rotashorariostrafego $Rotashorariostrafego
 */
class RotashorariostrafegosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rotashorariostrafego->recursive = 0;
		$this->set('rotashorariostrafegos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rotashorariostrafego->exists($id)) {
			throw new NotFoundException(__('Invalid rotashorariostrafego'));
		}
		$options = array('conditions' => array('Rotashorariostrafego.' . $this->Rotashorariostrafego->primaryKey => $id));
		$this->set('rotashorariostrafego', $this->Rotashorariostrafego->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rotashorariostrafego->create();
			if ($this->Rotashorariostrafego->save($this->request->data)) {
				$this->Session->setFlash(__('The rotashorariostrafego has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rotashorariostrafego could not be saved. Please, try again.'));
			}
		}
		$rotas = $this->Rotashorariostrafego->Rotum->find('list');
		$this->set(compact('rotas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rotashorariostrafego->exists($id)) {
			throw new NotFoundException(__('Invalid rotashorariostrafego'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rotashorariostrafego->save($this->request->data)) {
				$this->Session->setFlash(__('The rotashorariostrafego has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rotashorariostrafego could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rotashorariostrafego.' . $this->Rotashorariostrafego->primaryKey => $id));
			$this->request->data = $this->Rotashorariostrafego->find('first', $options);
		}
		$rotas = $this->Rotashorariostrafego->Rotum->find('list');
		$this->set(compact('rotas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rotashorariostrafego->id = $id;
		if (!$this->Rotashorariostrafego->exists()) {
			throw new NotFoundException(__('Invalid rotashorariostrafego'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rotashorariostrafego->delete()) {
			$this->Session->setFlash(__('Rotashorariostrafego deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rotashorariostrafego was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
