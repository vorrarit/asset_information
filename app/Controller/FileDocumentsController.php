<?php
App::uses('AppController', 'Controller');
/**
 * FileDocuments Controller
 *
 * @property FileDocument $FileDocument
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FileDocumentsController extends AppController {

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
		$this->FileDocument->recursive = 0;
		$this->set('fileDocuments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FileDocument->exists($id)) {
			throw new NotFoundException(__('Invalid file document'));
		}
		$options = array('conditions' => array('FileDocument.' . $this->FileDocument->primaryKey => $id));
		$this->set('fileDocument', $this->FileDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileDocument->create();
			if ($this->FileDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The file document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file document could not be saved. Please, try again.'));
			}
		}
		$assetInformations = $this->FileDocument->AssetInformation->find('list');
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
		if (!$this->FileDocument->exists($id)) {
			throw new NotFoundException(__('Invalid file document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The file document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileDocument.' . $this->FileDocument->primaryKey => $id));
			$this->request->data = $this->FileDocument->find('first', $options);
		}
		$assetInformations = $this->FileDocument->AssetInformation->find('list');
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
		$this->FileDocument->id = $id;
		if (!$this->FileDocument->exists()) {
			throw new NotFoundException(__('Invalid file document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FileDocument->delete()) {
			$this->Session->setFlash(__('The file document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
