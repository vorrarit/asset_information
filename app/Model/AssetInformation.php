<?php
App::uses('AppModel', 'Model');
/**
 * AssetInformation Model
 *
 * @property Province $Province
 * @property District $District
 * @property SubDistrict $SubDistrict
 * @property Utilization $Utilization
 * @property ReligiousPlace $ReligiousPlace
 * @property FileDocument $FileDocument
 * @property FileMap $FileMap
 * @property Photo $Photo
 */
class AssetInformation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubDistrict' => array(
			'className' => 'SubDistrict',
			'foreignKey' => 'sub_district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Utilization' => array(
			'className' => 'Utilization',
			'foreignKey' => 'utilization_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReligiousPlace' => array(
			'className' => 'ReligiousPlace',
			'foreignKey' => 'religious_place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FileDocument' => array(
			'className' => 'FileDocument',
			'foreignKey' => 'asset_information_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FileMap' => array(
			'className' => 'FileMap',
			'foreignKey' => 'asset_information_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'asset_information_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
