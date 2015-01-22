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
	public function index($assetInformationID=null) {
		$this->set('assetID',$assetInformationID);
		$this->layout="carousel";
		$this->FileMap->recursive = 0;
		$this->set('fileMaps', $this->FileMap->find('all', array('conditions' => array('FileMap.asset_information_id' => $assetInformationID))));
//		$this->set('fileMaps', $this->Paginator->paginate());
		
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
	public function add($assetInformationID=null) {
		$id = $assetInformationID;
				$this->set('id',$assetInformationID);
		if(!empty($this->request->data)){
		
			 $photo = $this->request->data['fileMap']['filemap'];
				 //$photoId = $this->request->data['Photo']['id'];
//				 debug($this->request->data);die();
            if ($this->isUploadedFile($photo)) {
				
                $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
                $photo['FileMap']['file_map_path'] = '/img/photo';
                $photo['FileMap']['file_map_file_type'] = $photo['type'];
				$photo['FileMap']['asset_information_id'] = $id;
				$currentUser = $this->Session->read('Auth.User');
				$photo['FileMap']['created_by'] = $currentUser['name'];
				
            
//				pr($assetInformationID);
//		pr($this->request->data);
//		die();	
                $this->FileMap->create();
				
			    if ($this->FileMap->save($photo)) {
				
                    $photo['FileMap']['file_map_name'] = 'photo_' . $assetInformationID . '_' . $this->FileMap->id . '.' . $ext;
                    $this->saveUploadFile($photo, 'img/filemap', $photo['FileMap']['file_map_name']);
                    $photo['FileMap']['id'] = $this->FileMap->id;
                    $this->FileMap->save($photo);
                    
                    return $this->redirect(array('action' => 'index'.'/'.$assetInformationID));
                } else {
                    
                    $this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
                    
                }
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
    public function isUploadedFile($field) {
        $photo = array(
            'image/gif' => '.gif',
            'image/jpeg' => '.jpg',
            'image/png' => '.png'
        );
        if ((isset($field['error']) && $field['error'] == 0) ||
                (!empty($field['tmp_name']) && $field['tmp_name'] != 'none')
        ) {
            if (array_key_exists($field['type'], $photo)) {
                return is_uploaded_file($field['tmp_name']);
            }
        }
        return false;
    }

    public function saveUploadFile($field, $path, $fileName) {
        if (isset($field['error']) && $field['error'] == 0) {
            move_uploaded_file($field['tmp_name'], WWW_ROOT . $path . '/' . $fileName);
            return $path . '/' . $fileName;
        }

        return '';
    }
}
