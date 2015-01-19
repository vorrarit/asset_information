<?php
App::uses('AppController', 'Controller');
/**
 * ReligiousPlaces Controller
 *
 * @property ReligiousPlace $ReligiousPlace
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReligiousPlacesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReligiousPlace->recursive = 0;
		$this->set('religiousPlaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReligiousPlace->exists($id)) {
			throw new NotFoundException(__('Invalid religious place'));
		}
		$options = array('conditions' => array('ReligiousPlace.' . $this->ReligiousPlace->primaryKey => $id));
		$this->set('religiousPlace', $this->ReligiousPlace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReligiousPlace->create();
			if ($this->ReligiousPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The religious place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religious place could not be saved. Please, try again.'));
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
		if (!$this->ReligiousPlace->exists($id)) {
			throw new NotFoundException(__('Invalid religious place'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReligiousPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The religious place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religious place could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReligiousPlace.' . $this->ReligiousPlace->primaryKey => $id));
			$this->request->data = $this->ReligiousPlace->find('first', $options);
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
		$this->ReligiousPlace->id = $id;
		if (!$this->ReligiousPlace->exists()) {
			throw new NotFoundException(__('Invalid religious place'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReligiousPlace->delete()) {
			$this->Session->setFlash(__('The religious place has been deleted.'));
		} else {
			$this->Session->setFlash(__('The religious place could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
