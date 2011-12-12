<?php
App::uses('AppController', 'Controller');
/**
 * Repairtypes Controller
 *
 * @property Repairtype $Repairtype
 */
class RepairtypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Repairtype->recursive = 0;
		$this->set('repairtypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Repairtype->id = $id;
		if (!$this->Repairtype->exists()) {
			throw new NotFoundException(__('Invalid repairtype'));
		}
		$this->set('repairtype', $this->Repairtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Repairtype->create();
			if ($this->Repairtype->save($this->request->data)) {
				$this->Session->setFlash(__('The repairtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repairtype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Repairtype->id = $id;
		if (!$this->Repairtype->exists()) {
			throw new NotFoundException(__('Invalid repairtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Repairtype->save($this->request->data)) {
				$this->Session->setFlash(__('The repairtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repairtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Repairtype->read(null, $id);
		}
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
		$this->Repairtype->id = $id;
		if (!$this->Repairtype->exists()) {
			throw new NotFoundException(__('Invalid repairtype'));
		}
		if ($this->Repairtype->delete()) {
			$this->Session->setFlash(__('Repairtype deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Repairtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
