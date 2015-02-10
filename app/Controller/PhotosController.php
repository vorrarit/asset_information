<?php

App::uses('AppController', 'Controller');

/**
 * Photos Controller
 *
 * @property Photo $Photo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PhotosController extends AppController {

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
        public function index($assetInformationId = null) {
        $this->set('assetID',$assetInformationId);
        $this->Photo->recursive = 0;
        $this->set('photos', $this->Photo->find('all', array('conditions' => array('Photo.asset_information_id' => $assetInformationId))));
//       $this->set('photos', $this->Paginator->paginate());
        
        
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($assetInformationId = null) {
        $this->set('assetID',$assetInformationId);
        $this->Photo->recursive = 0;
        $this->set('photos', $this->Photo->find('all', array('conditions' => array('Photo.asset_information_id' => $assetInformationId))));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($assetInformationId = null) {

        $this->set('assetID',$assetInformationId);
        
        if ($this->request->is('post')) {

            //$photoId = $this->request->data['Photo']['id'];
                $photo = $this->request->data['Photo']['photo'];    
                $createdUser = $this->Session->read('Auth.User');
                
                
            //debug($this->request->data); die;
            if ($this->isUploadedFile($photo)) {
                
                $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
                
                $photo['Photo']['photo_path'] = '/img/photo';
                $photo['Photo']['photo_file_type'] = $photo['type'];
                $photo['Photo']['asset_information_id'] = $assetInformationId;
                $photo['Photo']['created_by'] = $createdUser['username'];
               
                $this->Photo->create();
                
                if ($this->Photo->save($photo)) {
                    
                    $photo['Photo']['photo_name'] = 'photo_' . $assetInformationId . '_' . $this->Photo->id . '.' . $ext;
                    $this->saveUploadFile($photo, 'img/photo', $photo['Photo']['photo_name']);
                    $photo['Photo']['id'] = $this->Photo->id;
                    //$assetInformationId = $photo['Photo']['id'] ;
                    //debug($currentUser);  die();
                    
                    $this->Photo->save($photo);
                    $this->Session->setFlash(__('The Photo has been saved.'), 'default', array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index'.'/'.$assetInformationId));
                } else {
                    
                    $this->Session->setFlash(__('The photo could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                    
                }
            }
        }

        $assetInformations = $this->Photo->AssetInformation->find('list');
        $this->set(compact('assetInformations'));
    }

    public function edit($id = null) {
        if (!$this->Photo->exists($id)) {
            throw new NotFoundException(__('Invalid photo'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Photo->save($this->request->data)) {
                $this->Session->setFlash(__('The photo has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
            $this->request->data = $this->Photo->find('first', $options);
        }
        $assetInformations = $this->Photo->AssetInformation->find('list');
        $this->set(compact('assetInformations'));
    }

    public function delete($id = null) {
        $this->Photo->id = $id;
		$Re = $this->Photo->find('first',array('conditions'=>array('Photo.id'=>$id))) ;
//        if (!$this->Photo->exists()) {
//            throw new NotFoundException(__('Invalid photo'));
//        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Photo->delete()) {
            $this->Session->setFlash(__('The photo has been deleted.'));
        } else {
            $this->Session->setFlash(__('The photo could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index/'.$Re['Photo']['asset_information_id']));
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
