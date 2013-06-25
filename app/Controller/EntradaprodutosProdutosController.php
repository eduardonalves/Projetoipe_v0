<?php
App::uses('AppController', 'Controller');
/**
 * EntradaprodutosProdutos Controller
 *
 * @property EntradaprodutosProduto $EntradaprodutosProduto
 */
class EntradaprodutosProdutosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntradaprodutosProduto->recursive = 0;
		$this->set('entradaprodutosProdutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EntradaprodutosProduto->exists($id)) {
			throw new NotFoundException(__('Invalid entradaprodutos produto'));
		}
		$options = array('conditions' => array('EntradaprodutosProduto.' . $this->EntradaprodutosProduto->primaryKey => $id));
		$this->set('entradaprodutosProduto', $this->EntradaprodutosProduto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntradaprodutosProduto->create();
			if ($this->EntradaprodutosProduto->save($this->request->data)) {
				$this->Session->setFlash(__('The entradaprodutos produto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entradaprodutos produto could not be saved. Please, try again.'));
			}
		}
		$entradaprodutos = $this->EntradaprodutosProduto->Entradaproduto->find('list');
		$produtos = $this->EntradaprodutosProduto->Produto->find('list');
		$this->set(compact('entradaprodutos', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EntradaprodutosProduto->exists($id)) {
			throw new NotFoundException(__('Invalid entradaprodutos produto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EntradaprodutosProduto->save($this->request->data)) {
				$this->Session->setFlash(__('The entradaprodutos produto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entradaprodutos produto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EntradaprodutosProduto.' . $this->EntradaprodutosProduto->primaryKey => $id));
			$this->request->data = $this->EntradaprodutosProduto->find('first', $options);
		}
		$entradaprodutos = $this->EntradaprodutosProduto->Entradaproduto->find('list');
		$produtos = $this->EntradaprodutosProduto->Produto->find('list');
		$this->set(compact('entradaprodutos', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EntradaprodutosProduto->id = $id;
		if (!$this->EntradaprodutosProduto->exists()) {
			throw new NotFoundException(__('Invalid entradaprodutos produto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EntradaprodutosProduto->delete()) {
			$this->Session->setFlash(__('Entradaprodutos produto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Entradaprodutos produto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
