<?php

App::uses('AppController', 'Controller');

class AssetInformationsController extends AppController {

	public $components = array('RequestHandler', 'Paginator', 'Session');
	public $uses = array('AssetInformation', 'Province', 'District', 'SubDistrict', 'Utilization', 'ReligiousPlace');

	public function index() {
		$utilizations = $this->Utilization->find('list', array('fields' => array('id', 'utilization_name')));
		$religious = $this->ReligiousPlace->find('list', array('fields' => array('id', 'religious_place_name')));
		if (!empty($this->request->data)) {
			$data = $this->request->data;
			$settings = array('AssetInformation' => array(
					'conditions' => array(),
					'order' => array('AssetInformation.id' => 'asc')
			));
			if ($data['AssetInformation']['search_all'] == 0) {
				if (!empty($data['AssetInformation']['asset_info_name'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_name) like'] = '%' . strtolower($data['AssetInformation']['asset_info_name']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_title_deed_no'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_title_deed_no) like'] = '%' . strtolower($data['AssetInformation']['asset_info_title_deed_no']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_mapsheet_no'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_mapsheet_no) like'] = '%' . strtolower($data['AssetInformation']['asset_info_mapsheet_no']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_parcel_no'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_parcel_no) like'] = '%' . strtolower($data['AssetInformation']['asset_info_parcel_no']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_dealing_file_no'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_dealing_file_no) like'] = '%' . strtolower($data['AssetInformation']['asset_info_dealing_file_no']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_Boundary'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_Boundary) like'] = '%' . strtolower($data['AssetInformation']['asset_info_Boundary']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_north'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_north ) like'] = '%' . strtolower($data['AssetInformation']['asset_info_north']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_south'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_south ) like'] = '%' . strtolower($data['AssetInformation']['asset_info_south']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_east'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_east ) like'] = '%' . strtolower($data['AssetInformation']['asset_info_east']) . '%';
				}
				if (!empty($data['AssetInformation']['asset_info_west'])) {
					$settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_west ) like'] = '%' . strtolower($data['AssetInformation']['asset_info_west']) . '%';
				}
				if (!empty($data['AssetInformation']['province_id'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.province_id'] = $data['AssetInformation']['province_id'];
				}
				if (!empty($data['AssetInformation']['district_id'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.district_id'] = $data['AssetInformation']['district_id'];
				}
				if (!empty($data['AssetInformation']['sub_district_id'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.sub_district_id'] = $data['AssetInformation']['sub_district_id'];
				}
				if (!empty($data['AssetInformation']['utilization_id'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.utilization_id'] = $data['AssetInformation']['utilization_id'];
				}
				if (!empty($data['AssetInformation']['religious_place_id'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.religious_place_id'] = $data['AssetInformation']['religious_place_id'];
				}
				if (!empty($data['AssetInformation']['asset_info_cost_estimate'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.asset_info_cost_estimate'] = $data['AssetInformation']['asset_info_cost_estimate'];
				}
				if (!empty($data['AssetInformation']['asset_info_rai'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.asset_info_rai'] = $data['AssetInformation']['asset_info_rai'];
				}
				if (!empty($data['AssetInformation']['asset_info_ngan'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.asset_info_ngan'] = $data['AssetInformation']['asset_info_ngan'];
				}
				if (!empty($data['AssetInformation']['asset_info_square_wah'])) {
					$settings['AssetInformation']['conditions']['AssetInformation.asset_info_square_wah'] = $data['AssetInformation']['asset_info_square_wah'];
				}
				$this->Paginator->settings = $settings;
				$this->set('assetInformations', $this->Paginator->paginate());
				
				
			} else {
				$this->set('assetInformations', $this->Paginator->paginate());
			}
		}
		$provinces = $this->Province->find('list', array('fields' => array('id', 'province_name')));
		$districts = $this->District->find('list', array('fields' => array('id', 'district_name')));
		$subDistricts = $this->SubDistrict->find('list', array('fields' => array('id', 'sub_district_name')));
		$this->AssetInformation->recursive = 1;
		$this->set('assetInformations', $this->Paginator->paginate());
		$this->set(compact('provinces', 'districts', 'subDistricts', 'utilizations', 'religious'));
	}

	public function view($id = null) {
		if (!$this->AssetInformation->exists($id)) {
			throw new NotFoundException(__('Invalid asset information'));
		}
		$options = array('conditions' => array('AssetInformation.' . $this->AssetInformation->primaryKey => $id));
		$this->set('assetInformation', $this->AssetInformation->find('first', $options));
	}

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

	function loadDistricts($provinceID) {
		$districts = $this->District->find('all', array('conditions' => array('province_id' => $provinceID), 'fields' => array('id', 'district_name')));
		$result['Districts'] = $districts;
		$this->set('result', $result);
		$this->set('_serialize', array('result'));
	}

	function loadSubDistricts($districtID) {
		$subdistrict = $this->SubDistrict->find('all', array('conditions' => array('district_id' => $districtID), 'fields' => array('id', 'sub_district_name')));
		$result['SubDistricts'] = $subdistrict;
		$this->set('result', $result);
		$this->set('_serialize', array('result'));
	}

}
