<?php
App::uses('AppController', 'Controller');
/**
 * Vendas Controller
 *
 * @property Venda $Venda
 */
class VendasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venda->recursive = 0;
		$this->set('vendas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
		$this->set('venda', $this->Venda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venda->create();
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('The venda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Venda->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('The venda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
			$this->request->data = $this->Venda->find('first', $options);
		}
		$clientes = $this->Venda->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Venda->id = $id;
		if (!$this->Venda->exists()) {
			throw new NotFoundException(__('Invalid venda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Venda->delete()) {
			$this->Session->setFlash(__('Venda deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Venda was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
