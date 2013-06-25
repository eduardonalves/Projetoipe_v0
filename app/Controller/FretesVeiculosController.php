<?php
App::uses('AppController', 'Controller');
/**
 * FretesVeiculos Controller
 *
 * @property FretesVeiculo $FretesVeiculo
 */
class FretesVeiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FretesVeiculo->recursive = 0;
		$this->set('fretesVeiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FretesVeiculo->exists($id)) {
			throw new NotFoundException(__('Invalid fretes veiculo'));
		}
		$options = array('conditions' => array('FretesVeiculo.' . $this->FretesVeiculo->primaryKey => $id));
		$this->set('fretesVeiculo', $this->FretesVeiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FretesVeiculo->create();
			if ($this->FretesVeiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The fretes veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fretes veiculo could not be saved. Please, try again.'));
			}
		}
		$fretes = $this->FretesVeiculo->Frete->find('list');
		$veiculos = $this->FretesVeiculo->Veiculo->find('list');
		$this->set(compact('fretes', 'veiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FretesVeiculo->exists($id)) {
			throw new NotFoundException(__('Invalid fretes veiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FretesVeiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The fretes veiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fretes veiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FretesVeiculo.' . $this->FretesVeiculo->primaryKey => $id));
			$this->request->data = $this->FretesVeiculo->find('first', $options);
		}
		$fretes = $this->FretesVeiculo->Frete->find('list');
		$veiculos = $this->FretesVeiculo->Veiculo->find('list');
		$this->set(compact('fretes', 'veiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FretesVeiculo->id = $id;
		if (!$this->FretesVeiculo->exists()) {
			throw new NotFoundException(__('Invalid fretes veiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FretesVeiculo->delete()) {
			$this->Session->setFlash(__('Fretes veiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fretes veiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
