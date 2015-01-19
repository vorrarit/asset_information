<?php
App::uses('AppController', 'Controller');
/**
 * SubDistricts Controller
 *
 * @property SubDistrict $SubDistrict
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubDistrictsController extends AppController {

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
		$this->SubDistrict->recursive = 0;
		$this->set('subDistricts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubDistrict->exists($id)) {
			throw new NotFoundException(__('Invalid sub district'));
		}
		$options = array('conditions' => array('SubDistrict.' . $this->SubDistrict->primaryKey => $id));
		$this->set('subDistrict', $this->SubDistrict->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubDistrict->create();
			if ($this->SubDistrict->save($this->request->data)) {
				$this->Session->setFlash(__('The sub district has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub district could not be saved. Please, try again.'));
			}
		}
		$provinces = $this->SubDistrict->Province->find('list');
		$districts = $this->SubDistrict->District->find('list');
		$this->set(compact('provinces', 'districts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubDistrict->exists($id)) {
			throw new NotFoundException(__('Invalid sub district'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubDistrict->save($this->request->data)) {
				$this->Session->setFlash(__('The sub district has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub district could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubDistrict.' . $this->SubDistrict->primaryKey => $id));
			$this->request->data = $this->SubDistrict->find('first', $options);
		}
		$provinces = $this->SubDistrict->Province->find('list');
		$districts = $this->SubDistrict->District->find('list');
		$this->set(compact('provinces', 'districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubDistrict->id = $id;
		if (!$this->SubDistrict->exists()) {
			throw new NotFoundException(__('Invalid sub district'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubDistrict->delete()) {
			$this->Session->setFlash(__('The sub district has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub district could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
