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

        $provinces = $this->Province->find('list', array('fields' => array('id', 'province_name')));
        $districts = $this->District->find('list', array('fields' => array('id', 'district_name')));
        $subDistricts = $this->SubDistrict->find('list', array('fields' => array('id', 'sub_district_name')));
        $this->AssetInformation->recursive = 1;
        $this->set('assetInformations', $this->Paginator->paginate());
        $this->set(compact('provinces', 'districts', 'subDistricts', 'utilizations', 'religious'));
    }

    public function view($id = null) {
        $this->set('assetID', $id);
        if (!$this->AssetInformation->exists($id)) {
            throw new NotFoundException(__('Invalid asset information'));
        }
        $options = array('conditions' => array('AssetInformation.' . $this->AssetInformation->primaryKey => $id));
        $this->set('assetInformation', $this->AssetInformation->find('first', $options));
    }

    public function add() {
        if ($this->request->is('post')) {
            $currentUser = $this->Session->read('Auth.User');
            $this->AssetInformation->create();
            $count = $this->AssetInformation->find('count');
            $id = $count + 1;
            $this->request->data['AssetInformation']['id'] = $id;
            $this->request->data['AssetInformation']['created_by'] = $currentUser['name'];
            if ($this->AssetInformation->save($this->request->data)) {
                $this->Session->setFlash(__('บันทึกข้อมูลเสร็จแล้ว'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => '../FileDocuments/index/' . $id));
            } else {
                $this->Session->setFlash(__('การบันทึกข้อมูลเกิดความผิดพลาด กรุณาลองใหม่อีกครั้ง'), 'default', array('class' => 'alert alert-danger'));
            }
        }

        $provinces = $this->AssetInformation->Province->find('list', array(
            'fields' => array(
                'Province.id',
                'Province.province_name',
            ),
            'order' => array('Province.id' => 'asc')
        ));
        $districts = $this->AssetInformation->District->find('list', array(
            'fields' => array(
                'District.id',
                'District.district_name',
            )
        ));
        $subDistricts = $this->AssetInformation->SubDistrict->find('list', array(
            'fields' => array(
                'SubDistrict.id',
                'SubDistrict.sub_district_name',
            )
        ));
        $utilizations = $this->AssetInformation->Utilization->find('list', array(
            'fields' => array(
                'Utilization.id',
                'Utilization.utilization_name',
            )
        ));
        $religiousPlaces = $this->AssetInformation->ReligiousPlace->find('list', array(
            'fields' => array(
                'ReligiousPlace.id',
                'ReligiousPlace.religious_place_name',
            )
        ));
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
        $this->set('id', $id);
        if (!$this->AssetInformation->exists($id)) {

            throw new NotFoundException(__('Invalid asset information'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $currentUser = $this->Session->read('Auth.User');
            if ($this->AssetInformation->save($this->request->data)) {

                $this->request->data['AssetInformation']['modified_by'] = $currentUser['name'];
                $this->Session->setFlash(__('บันทึกข้อมูลเสร็จแล้ว'), 'default', array('class' => 'alert alert-success'));

                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('การบันทึกข้อมูลเกิดความผิดพลาด กรุณาลองใหม่อีกครั้ง'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('AssetInformation.' . $this->AssetInformation->primaryKey => $id));
            $this->request->data = $this->AssetInformation->find('first', $options);
        }
        $provinces = $this->AssetInformation->Province->find('list', array(
            'fields' => array(
                'Province.id',
                'Province.province_name',
            )
        ));
        $districts = $this->AssetInformation->District->find('list', array(
            'fields' => array(
                'District.id',
                'District.district_name',
            )
        ));
        $subDistricts = $this->AssetInformation->SubDistrict->find('list', array(
            'fields' => array(
                'SubDistrict.id',
                'SubDistrict.sub_district_name',
            )
        ));
        $utilizations = $this->AssetInformation->Utilization->find('list', array(
            'fields' => array(
                'Utilization.id',
                'Utilization.utilization_name',
            )
        ));

        $religiousPlaces = $this->AssetInformation->ReligiousPlace->find('list', array(
            'fields' => array(
                'ReligiousPlace.id',
                'ReligiousPlace.religious_place_name',
            )
        ));
        $this->set(compact('provinces', 'districts', 'subDistricts', 'utilizations', 'religiousPlaces'));
        $this->set('AssetID', $id);

        $this->AssetInformation->recursive = 1;
        $settings = array('AssetInformation' => array('conditions' => array('AssetInformation.id' => $id)));
        $this->Paginator->settings = $settings;
        $this->set('assetInformations', $this->Paginator->paginate());
    }

    public function check_report() {

        if (!empty($this->request->data)) {
            $data = $this->request->data;

            if ($data['AssetInformation']['search_all'] == 0) {
                if ($data['AssetInformation']['report_type'] == 'general') {
                    //----------------general-------------------
                    $dataReport = array($data['AssetInformation']['asset_info_name'],
                        $data['AssetInformation']['asset_info_title_deed_no'],
                        $data['AssetInformation']['asset_info_mapsheet_no'],
                        $data['AssetInformation']['asset_info_parcel_no'],
                        $data['AssetInformation']['asset_info_dealing_file_no'],
                        $data['AssetInformation']['asset_info_Boundary'],
                        $data['AssetInformation']['asset_info_north'],
                        $data['AssetInformation']['asset_info_south'],
                        $data['AssetInformation']['asset_info_east'],
                        $data['AssetInformation']['asset_info_west'],
                        $data['AssetInformation']['province_id'],
                        $data['AssetInformation']['district_id'],
                        $data['AssetInformation']['sub_district_id'],
                        $data['AssetInformation']['religious_place_id'],
                        $data['AssetInformation']['utilization_id'],
                        $data['AssetInformation']['asset_info_cost_estimate'],
                        $data['AssetInformation']['asset_info_rai'],
                        $data['AssetInformation']['asset_info_ngan'],
                        $data['AssetInformation']['asset_info_square_wah']
                    );
                    $this->Session->write('dataReport', $dataReport);
                    $this->redirect(array('action' => 'report_general/'));
                } else if ($data['AssetInformation']['report_type'] == "detail") {
                    //----------------manager-------------------

                    $dataReport = array($data['AssetInformation']['asset_info_name'],
                        $data['AssetInformation']['asset_info_title_deed_no'],
                        $data['AssetInformation']['asset_info_mapsheet_no'],
                        $data['AssetInformation']['asset_info_parcel_no'],
                        $data['AssetInformation']['asset_info_dealing_file_no'],
                        $data['AssetInformation']['asset_info_Boundary'],
                        $data['AssetInformation']['province_id'],
                        $data['AssetInformation']['district_id'],
                        $data['AssetInformation']['sub_district_id'],
                        $data['AssetInformation']['religious_place_id'],
                        $data['AssetInformation']['utilization_id'],
                        $data['AssetInformation']['asset_info_cost_estimate'],
                        $data['AssetInformation']['asset_info_rai'],
                        $data['AssetInformation']['asset_info_ngan'],
                        $data['AssetInformation']['asset_info_square_wah']
                    );
                    $this->Session->write('dataReport', $dataReport);
                    $this->redirect(array('action' => 'report_manager/'));
                }
            } else if ($data['AssetInformation']['search_all'] == 1) {

                $this->set('assetInformations', $this->Paginator->paginate('AssetInformation'));
            }

            return $this->redirect(array('action' => 'report'));
        } else {
            return $this->redirect(array('action' => 'report'));
        }
    }

    public function report_general() {
        $dataReport = $this->Session->read('dataReport');

        $settings = array('AssetInformation' => array(
                'conditions' => array(),
                'order' => array('AssetInformation.id' => 'asc'))
        );
        if (!empty($dataReport[0])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_name) like'] = '%' . strtolower($dataReport[0]) . '%';
        }
        if (!empty($dataReport[1])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_title_deed_no) like'] = '%' . strtolower($dataReport[1]) . '%';
        }
        if (!empty($dataReport[2])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_mapsheet_no) like'] = '%' . strtolower($dataReport[2]) . '%';
        }
        if (!empty($dataReport[3])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_parcel_no) like'] = '%' . strtolower($dataReport[3]) . '%';
        }
        if (!empty($dataReport[4])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_dealing_file_no) like'] = '%' . strtolower($dataReport[4]) . '%';
        }
        if (!empty($dataReport[5])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_Boundary) like'] = '%' . strtolower($dataReport[5]) . '%';
        }
        if (!empty($dataReport[6])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_north) like'] = '%' . strtolower($dataReport[6]) . '%';
        }
        if (!empty($dataReport[7])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_south) like'] = '%' . strtolower($dataReport[7]) . '%';
        }
        if (!empty($dataReport[8])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_east) like'] = '%' . strtolower($dataReport[8]) . '%';
        }
        if (!empty($dataReport[9])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_west) like'] = '%' . strtolower($dataReport[9]) . '%';
        }
        if (!empty($dataReport[10])) {
            $settings['AssetInformation']['conditions']['AssetInformation.province_id'] = $dataReport[10];
        }
        if (!empty($dataReport[11])) {
            $settings['AssetInformation']['conditions']['AssetInformation.district_id'] = $dataReport[11];
        }
        if (!empty($dataReport[12])) {
            $settings['AssetInformation']['conditions']['AssetInformation.sub_district_id'] = $dataReport[12];
        }
        if (!empty($dataReport[13])) {
            $settings['AssetInformation']['conditions']['AssetInformation.religious_place_id'] = $dataReport[13];
        }
        if (!empty($dataReport[14])) {
            $settings['AssetInformation']['conditions']['AssetInformation.utilization_id'] = $dataReport[14];
        }
        if (!empty($dataReport[15])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_cost_estimate'] = $dataReport[15];
        }
        if (!empty($dataReport[16])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_rai'] = $dataReport[16];
        }
        if (!empty($dataReport[17])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_ngan'] = $dataReport[17];
        }
        if (!empty($dataReport[18])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_square_wah'] = $dataReport[18];
        }

        $this->Paginator->settings = $settings;
        $this->set('assetInformations', $this->Paginator->paginate('AssetInformation'));
    }

    public function report_manager() {
        $dataReport = $this->Session->read('dataReport');

        $settings = array('AssetInformation' => array(
                'conditions' => array(),
                'order' => array('AssetInformation.id' => 'asc'))
        );
       
        if (!empty($dataReport[0])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_name) like'] = '%' . strtolower($dataReport[0]) . '%';
        }
        if (!empty($dataReport[1])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_title_deed_no) like'] = '%' . strtolower($dataReport[1]) . '%';
        }
        if (!empty($dataReport[2])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_mapsheet_no) like'] = '%' . strtolower($dataReport[2]) . '%';
        }
        if (!empty($dataReport[3])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_parcel_no) like'] = '%' . strtolower($dataReport[3]) . '%';
        }
        if (!empty($dataReport[4])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_dealing_file_no) like'] = '%' . strtolower($dataReport[4]) . '%';
        }
        if (!empty($dataReport[5])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_Boundary) like'] = '%' . strtolower($dataReport[5]) . '%';
        }
        if (!empty($dataReport[6])) {
            $settings['AssetInformation']['conditions']['AssetInformation.province_id'] = $dataReport[6];
        }
        if (!empty($dataReport[7])) {
            $settings['AssetInformation']['conditions']['AssetInformation.district_id'] = $dataReport[7];
        }
        if (!empty($dataReport[8])) {
            $settings['AssetInformation']['conditions']['AssetInformation.sub_district_id'] = $dataReport[8];
        }
        if (!empty($dataReport[9])) {
            $settings['AssetInformation']['conditions']['AssetInformation.religious_place_id'] = $dataReport[9];
        }
        if (!empty($dataReport[10])) {
            $settings['AssetInformation']['conditions']['AssetInformation.utilization_id'] = $dataReport[10];
        }
        if (!empty($dataReport[11])) {
            $settings['AssetInformation']['conditions']['lower(AssetInformation.asset_info_cost_estimate) like'] = '%' . strtolower($dataReport[11]) . '%';
        }
        if (!empty($dataReport[12])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_rai'] = $dataReport[12];
        }
        if (!empty($dataReport[13])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_ngan'] = $dataReport[13];
        }
        if (!empty($dataReport[14])) {
            $settings['AssetInformation']['conditions']['AssetInformation.asset_info_square_wah'] = $dataReport[14];
        }

        $this->Paginator->settings = $settings;
        $this->set('assetInformations', $this->Paginator->paginate('AssetInformation'));
    }

    public function multiExport() {
        if ($this->request->is(array('post', 'put'))) {
            $productIds = array();
            $this->Paginator->settings = $productIds;
            $this->set('assetInformations', $this->Paginator->paginate());
            $this->layout = 'csv';
        }
    }

    public function report() {
        $provinces = $this->AssetInformation->Province->find('list', array(
            'fields' => array(
                'Province.id',
                'Province.province_name',
            ),
            'order' => array('Province.id' => 'asc')
        ));
        $districts = $this->AssetInformation->District->find('list', array(
            'fields' => array(
                'District.id',
                'District.district_name',
            )
        ));
        $subDistricts = $this->AssetInformation->SubDistrict->find('list', array(
            'fields' => array(
                'SubDistrict.id',
                'SubDistrict.sub_district_name',
            )
        ));
        $religiousPlaces = $this->AssetInformation->ReligiousPlace->find('list', array(
            'fields' => array(
                'ReligiousPlace.id',
                'ReligiousPlace.religious_place_name',
            )
        ));
        $utilizations = $this->AssetInformation->Utilization->find('list', array(
            'fields' => array(
                'Utilization.id',
                'Utilization.utilization_name',
            )
        ));
        $this->set(compact('provinces', 'districts', 'subDistricts', 'religiousPlaces', 'utilizations'));
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
        if ($this->AssetInformation->delete()) {
            $this->Session->setFlash(__('ลบข้อมูลสำเร็จ'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('การลบข้อมูลเกิดความผิดพลาด กรุณาลองใหม่อีกครั้ง'), 'default', array('class' => 'alert alert-danger'));
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

    function load_Districts($pvID) {
        $districts = $this->District->find('all', array('conditions' => array('province_id' => $pvID), 'fields' => array('id', 'district_name')));

        $result['Districts'] = $districts;
        $this->set('result', $result);
        $this->set('_serialize', array('result'));
    }

    function load_SubDistricts($dtID) {
        $subdistricts = $this->AssetInformation->SubDistrict->find('all', array('conditions' => array('district_id' => $dtID), 'fields' => array('id', 'sub_district_name')));

        $result['SubDistrict'] = $subdistricts;
        $this->set('result', $result);
        $this->set('_serialize', array('result'));
    }

}
