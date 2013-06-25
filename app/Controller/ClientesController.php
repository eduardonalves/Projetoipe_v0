<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 */
class ClientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {

			$this->Filter->addFilters(
				array(
					'clientesnomerazao' => array(
						'Cliente.nomerazao' => array(
							'operator' => 'LIKE',
							'value' => array(
								'before' => '%', // optional
								'after'  => '%'  // optional
							)
						)
					),
					'clientescnpjcpf' => array(
						'Cliente.cnpjcpf' => array(
							'operator' => 'LIKE',
							'value' => array(
								'before' => '%', // optional
								'after'  => '%'  // optional
							)
						)
					)
				)
			);
			$this->Filter->setPaginate('order', 'Cliente.nomerazao ASC'); // optional
			$this->Filter->setPaginate('limit', 10);              // optional

			// Define conditions
			$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
			$this->Cliente->recursive = 0;
			$this->set('clientes', $this->paginate());
			
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('Cliente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cliente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
