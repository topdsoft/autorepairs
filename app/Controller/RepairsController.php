<?php
App::uses('AppController', 'Controller');
/**
 * Repairs Controller
 *
 * @property Repair $Repair
 */
class RepairsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Repair->recursive = 0;
		$this->set('repairs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Repair->id = $id;
		if (!$this->Repair->exists()) {
			throw new NotFoundException(__('Invalid repair'));
		}
		$this->set('repair', $this->Repair->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Repair->create();
			if ($this->Repair->save($this->request->data)) {
				$this->Session->setFlash(__('The repair has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->Repair->Vehicle->find('list');
		$repairtypes = $this->Repair->Repairtype->find('list');
		$this->set(compact('vehicles', 'repairtypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Repair->id = $id;
		if (!$this->Repair->exists()) {
			throw new NotFoundException(__('Invalid repair'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Repair->save($this->request->data)) {
				$this->Session->setFlash(__('The repair has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Repair->read(null, $id);
		}
		$vehicles = $this->Repair->Vehicle->find('list');
		$repairtypes = $this->Repair->Repairtype->find('list');
		$this->set(compact('vehicles', 'repairtypes'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Repair->id = $id;
		if (!$this->Repair->exists()) {
			throw new NotFoundException(__('Invalid repair'));
		}
		if ($this->Repair->delete()) {
			$this->Session->setFlash(__('Repair deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Repair was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
