<?php

App::uses('AppController', 'Controller');

class FileDocumentsController extends AppController {

    public $components = array('Paginator', 'Session');

    public function index($assetInformationId = null) {
        $this->set('assetID', $assetInformationId);
        $this->FileDocument->recursive = 0;
        $this->set('fileDocuments',$this->FileDocument->find('all',array('conditions'=>array('FileDocument.asset_information_id'=>$assetInformationId))));
    }

    public function view($assetInformationId = null) {
        $this->set('assetID', $assetInformationId);
        $this->FileDocument->recursive = 0;
        $this->set('fileDocuments',$this->FileDocument->find('all',array('conditions'=>array('FileDocument.asset_information_id'=>$assetInformationId))));
    
    }
    
    public function add($assetInformationId = null) {
        
            $this->set('assetID', $assetInformationId);
            
        if ($this->request->is('post')) {
            
            $document = $this->request->data['FileDocument']['document'];
//			pr($document);
//			die();
            if ($this->isUploadedFile($document)) {

                $doc = pathinfo($document['name'], PATHINFO_EXTENSION);
                $document['file_doc_path'] = '/files/filedocument';
                $document['file_doc_file_type'] = $document['type'];
                $document['file_doc_name'] = 'filedocument_' . $assetInformationId . '_' . $this->FileDocument->id . '.' . $doc;
                $document['asset_information_id'] = $assetInformationId;
                
                $currentUser = $this->Session->read('Auth.User');
                $document['created_by'] = $currentUser['username'];
                $this->FileDocument->create();

                if ($this->FileDocument->save($document)) {
                    $document['id'] = $this->FileDocument->id;
                    $document['file_doc_name'] = 'filedocument_' . $assetInformationId . '_' . $this->FileDocument->id . '.' . $doc;
                    $this->saveUploadFile($document, 'files/filedocument', $document['file_doc_name']);
                    $this->FileDocument->save($document);
                    $this->Session->setFlash(__('The filedoument has been saved.'), 'default', array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index/'.$assetInformationId));
                } else {
                    $this->Session->setFlash(__('The filedoument could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                }
            }
        }

        $assetInformations = $this->FileDocument->AssetInformation->find('list');
        $this->set(compact('assetInformations'));
    }

    public function edit($id = null) {
        if (!$this->FileDocument->exists($id)) {
            throw new NotFoundException(__('Invalid file document'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->FileDocument->save($this->request->data)) {
                $this->Session->setFlash(__('The filedoument has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The filedoument could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('FileDocument.' . $this->FileDocument->primaryKey => $id));
            $this->request->data = $this->FileDocument->find('first', $options);
        }
        $assetInformations = $this->FileDocument->AssetInformation->find('list');
        $this->set(compact('assetInformations'));
    }

    public function delete($id = null) {
        $this->FileDocument->id = $id;
		$Re = $this->FileDocument->find('first',array('conditions' => array('FileDocument.id'=>$id)));
	    if (!$this->FileDocument->exists()) {
            throw new NotFoundException(__('Invalid file document'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->FileDocument->delete()) {
            $this->Session->setFlash(__('The filedoument has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The filedoument could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index/'.$Re['FileDocument']['asset_information_id']));
    }

    public function isUploadedFile($field) {
        $document = array(
            'filedocument/doc' => '.doc',
            'filedocument/docx' => '.docx',
            'application/pdf' => '.pdf',
            'application/msword' => '.msword',
            'image/jpeg' => '.jpg',
        );

        if ((isset($field['error']) && $field['error'] == 0) ||
                (!empty($field['tmp_name']) && $field['tmp_name'] != 'none')
        ) {
            if (array_key_exists($field['type'], $document)) {
                return is_uploaded_file($field['tmp_name']);
            }
        }

        return false;
    }
    public function isUploadedFileDocument($field) {
        $map = array(
            'imgDoc/pdf' => '.pdf',
            'imgDoc/jpeg' => '.jpg',
        );
        if ((isset($field['error']) && $field['error'] == 0) ||
                (!empty($field['tmp_name']) && $field['tmp_name'] != 'none')
        ) {
//            if (array_key_exists($field['type'], $map)) {
            return is_uploaded_file($field['tmp_name']);
//            }
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
