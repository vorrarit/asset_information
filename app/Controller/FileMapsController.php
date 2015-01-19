<?php
App::uses('AppController', 'Controller');
/**
 * FileMaps Controller
 *
 * @property FileMap $FileMap
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FileMapsController extends AppController {

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
		$this->FileMap->recursive = 0;
		$this->set('fileMaps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FileMap->exists($id)) {
			throw new NotFoundException(__('Invalid file map'));
		}
		$options = array('conditions' => array('FileMap.' . $this->FileMap->primaryKey => $id));
		$this->set('fileMap', $this->FileMap->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileMap->create();
			if ($this->FileMap->save($this->request->data)) {
				$this->Session->setFlash(__('The file map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file map could not be saved. Please, try again.'));
			}
		}
		$assetInformations = $this->FileMap->AssetInformation->find('list');
		$this->set(compact('assetInformations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FileMap->exists($id)) {
			throw new NotFoundException(__('Invalid file map'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileMap->save($this->request->data)) {
				$this->Session->setFlash(__('The file map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file map could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileMap.' . $this->FileMap->primaryKey => $id));
			$this->request->data = $this->FileMap->find('first', $options);
		}
		$assetInformations = $this->FileMap->AssetInformation->find('list');
		$this->set(compact('assetInformations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FileMap->id = $id;
		if (!$this->FileMap->exists()) {
			throw new NotFoundException(__('Invalid file map'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FileMap->delete()) {
			$this->Session->setFlash(__('The file map has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file map could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
