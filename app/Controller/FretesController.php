<?php
App::uses('AppController', 'Controller');
/**
 * Fretes Controller
 *
 * @property Frete $Frete
 */
class FretesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Frete->recursive = 0;
		$this->set('fretes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Frete->exists($id)) {
			throw new NotFoundException(__('Invalid frete'));
		}
		$options = array('conditions' => array('Frete.' . $this->Frete->primaryKey => $id));
		$this->set('frete', $this->Frete->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frete->create();
			if ($this->Frete->save($this->request->data)) {
				$this->Session->setFlash(__('The frete has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frete could not be saved. Please, try again.'));
			}
		}
		$vendas = $this->Frete->Venda->find('list');
		$clientes = $this->Frete->Cliente->find('list');
		$veiculos = $this->Frete->Veiculo->find('list');
		$this->set(compact('vendas', 'clientes', 'veiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Frete->exists($id)) {
			throw new NotFoundException(__('Invalid frete'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Frete->save($this->request->data)) {
				$this->Session->setFlash(__('The frete has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frete could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Frete.' . $this->Frete->primaryKey => $id));
			$this->request->data = $this->Frete->find('first', $options);
		}
		$vendas = $this->Frete->Venda->find('list');
		$clientes = $this->Frete->Cliente->find('list');
		$veiculos = $this->Frete->Veiculo->find('list');
		$this->set(compact('vendas', 'clientes', 'veiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Frete->id = $id;
		if (!$this->Frete->exists()) {
			throw new NotFoundException(__('Invalid frete'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Frete->delete()) {
			$this->Session->setFlash(__('Frete deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Frete was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
