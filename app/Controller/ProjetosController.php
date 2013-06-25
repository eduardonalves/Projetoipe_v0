<?php
App::uses('AppController', 'Controller');
/**
 * Projetos Controller
 *
 * @property Projeto $Projeto
 */
class ProjetosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Projeto->recursive = 0;
		$this->set('projetos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
		$this->set('projeto', $this->Projeto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Projeto->create();
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Projeto->Cliente->find('list');
		$equipamentos = $this->Projeto->Equipamento->find('list');
		$funcionarios = $this->Projeto->Funcionario->find('list');
		$locacaoequips = $this->Projeto->Locacaoequip->find('list');
		$locacaofuncionarios = $this->Projeto->Locacaofuncionario->find('list');
		$locacaoveiculos = $this->Projeto->Locacaoveiculo->find('list');
		$veiculos = $this->Projeto->Veiculo->find('list');
		$this->set(compact('clientes', 'equipamentos', 'funcionarios', 'locacaoequips', 'locacaofuncionarios', 'locacaoveiculos', 'veiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
			$this->request->data = $this->Projeto->find('first', $options);
		}
		$clientes = $this->Projeto->Cliente->find('list');
		$equipamentos = $this->Projeto->Equipamento->find('list');
		$funcionarios = $this->Projeto->Funcionario->find('list');
		$locacaoequips = $this->Projeto->Locacaoequip->find('list');
		$locacaofuncionarios = $this->Projeto->Locacaofuncionario->find('list');
		$locacaoveiculos = $this->Projeto->Locacaoveiculo->find('list');
		$veiculos = $this->Projeto->Veiculo->find('list');
		$this->set(compact('clientes', 'equipamentos', 'funcionarios', 'locacaoequips', 'locacaofuncionarios', 'locacaoveiculos', 'veiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Projeto->id = $id;
		if (!$this->Projeto->exists()) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Projeto->delete()) {
			$this->Session->setFlash(__('Projeto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projeto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
