<?php
App::uses('AppController', 'Controller');
/**
 * Entradaprodutos Controller
 *
 * @property Entradaproduto $Entradaproduto
 */
class EntradaprodutosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Entradaproduto->recursive = 0;
		$this->set('entradaprodutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entradaproduto->exists($id)) {
			throw new NotFoundException(__('Invalid entradaproduto'));
		}
		$options = array('conditions' => array('Entradaproduto.' . $this->Entradaproduto->primaryKey => $id));
		$this->set('entradaproduto', $this->Entradaproduto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entradaproduto->create();
			if ($this->Entradaproduto->save($this->request->data)) {
				$this->Session->setFlash(__('The entradaproduto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entradaproduto could not be saved. Please, try again.'));
			}
		}
		$usinas = $this->Entradaproduto->Usina->find('list');
		$produtos = $this->Entradaproduto->Produto->find('list');
		$this->set(compact('usinas', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entradaproduto->exists($id)) {
			throw new NotFoundException(__('Invalid entradaproduto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Entradaproduto->save($this->request->data)) {
				$this->Session->setFlash(__('The entradaproduto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entradaproduto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entradaproduto.' . $this->Entradaproduto->primaryKey => $id));
			$this->request->data = $this->Entradaproduto->find('first', $options);
		}
		$usinas = $this->Entradaproduto->Usina->find('list');
		$produtos = $this->Entradaproduto->Produto->find('list');
		$this->set(compact('usinas', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entradaproduto->id = $id;
		if (!$this->Entradaproduto->exists()) {
			throw new NotFoundException(__('Invalid entradaproduto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Entradaproduto->delete()) {
			$this->Session->setFlash(__('Entradaproduto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Entradaproduto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
