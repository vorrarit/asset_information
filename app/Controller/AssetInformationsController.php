<?php
App::uses('AppController', 'Controller');
/**
 * AssetInformations Controller
 *
 * @property AssetInformation $AssetInformation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AssetInformationsController extends AppController {

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
		$this->AssetInformation->recursive = 0;
		$this->set('assetInformations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetInformation->exists($id)) {
			throw new NotFoundException(__('Invalid asset information'));
		}
		$options = array('conditions' => array('AssetInformation.' . $this->AssetInformation->primaryKey => $id));
		$this->set('assetInformation', $this->AssetInformation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetInformation->create();
			if ($this->AssetInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The asset information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset information could not be saved. Please, try again.'));
			}
		}
		$provinces = $this->AssetInformation->Province->find('list');
		$districts = $this->AssetInformation->District->find('list');
		$subDistricts = $this->AssetInformation->SubDistrict->find('list');
		$utilizations = $this->AssetInformation->Utilization->find('list');
		$religiousPlaces = $this->AssetInformation->ReligiousPlace->find('list');
		$this->set(compact('provinces', 'districts', 'subDistricts', 'utilizations', 'religiousPlaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AssetInformation->exists($id)) {
			throw new NotFoundException(__('Invalid asset information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssetInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The asset information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetInformation.' . $this->AssetInformation->primaryKey => $id));
			$this->request->data = $this->AssetInformation->find('first', $options);
		}
		$provinces = $this->AssetInformation->Province->find('list');
		$districts = $this->AssetInformation->District->find('list');
		$subDistricts = $this->AssetInformation->SubDistrict->find('list');
		$utilizations = $this->AssetInformation->Utilization->find('list');
		$religiousPlaces = $this->AssetInformation->ReligiousPlace->find('list');
		$this->set(compact('provinces', 'districts', 'subDistricts', 'utilizations', 'religiousPlaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AssetInformation->id = $id;
		if (!$this->AssetInformation->exists()) {
			throw new NotFoundException(__('Invalid asset information'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AssetInformation->delete()) {
			$this->Session->setFlash(__('The asset information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The asset information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
