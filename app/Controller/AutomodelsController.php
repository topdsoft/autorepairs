<?php
App::uses('AppController', 'Controller');
/**
 * Automodels Controller
 *
 * @property Automodel $Automodel
 */
class AutomodelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Automodel->recursive = 0;
		$this->set('automodels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Automodel->id = $id;
		if (!$this->Automodel->exists()) {
			throw new NotFoundException(__('Invalid automodel'));
		}
		$this->set('automodel', $this->Automodel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Automodel->create();
			if ($this->Automodel->save($this->request->data)) {
				$this->Session->setFlash(__('The automodel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automodel could not be saved. Please, try again.'));
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
		$this->Automodel->id = $id;
		if (!$this->Automodel->exists()) {
			throw new NotFoundException(__('Invalid automodel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Automodel->save($this->request->data)) {
				$this->Session->setFlash(__('The automodel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automodel could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Automodel->read(null, $id);
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
		$this->Automodel->id = $id;
		if (!$this->Automodel->exists()) {
			throw new NotFoundException(__('Invalid automodel'));
		}
		if ($this->Automodel->delete()) {
			$this->Session->setFlash(__('Automodel deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Automodel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
