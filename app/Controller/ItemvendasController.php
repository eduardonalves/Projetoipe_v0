<?php
App::uses('AppController', 'Controller');
/**
 * Itemvendas Controller
 *
 * @property Itemvenda $Itemvenda
 */
class ItemvendasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itemvenda->recursive = 0;
		$this->set('itemvendas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itemvenda->exists($id)) {
			throw new NotFoundException(__('Invalid itemvenda'));
		}
		$options = array('conditions' => array('Itemvenda.' . $this->Itemvenda->primaryKey => $id));
		$this->set('itemvenda', $this->Itemvenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itemvenda->create();
			if ($this->Itemvenda->save($this->request->data)) {
				$this->Session->setFlash(__('The itemvenda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itemvenda could not be saved. Please, try again.'));
			}
		}
		$vendas = $this->Itemvenda->Venda->find('list');
		$produtos = $this->Itemvenda->Produto->find('list');
		$this->set(compact('vendas', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Itemvenda->exists($id)) {
			throw new NotFoundException(__('Invalid itemvenda'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itemvenda->save($this->request->data)) {
				$this->Session->setFlash(__('The itemvenda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itemvenda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itemvenda.' . $this->Itemvenda->primaryKey => $id));
			$this->request->data = $this->Itemvenda->find('first', $options);
		}
		$vendas = $this->Itemvenda->Venda->find('list');
		$produtos = $this->Itemvenda->Produto->find('list');
		$this->set(compact('vendas', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Itemvenda->id = $id;
		if (!$this->Itemvenda->exists()) {
			throw new NotFoundException(__('Invalid itemvenda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itemvenda->delete()) {
			$this->Session->setFlash(__('Itemvenda deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itemvenda was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
