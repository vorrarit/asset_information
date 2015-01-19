<?php
App::uses('AppModel', 'Model');
/**
 * FileMap Model
 *
 * @property AssetInformation $AssetInformation
 */
class FileMap extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AssetInformation' => array(
			'className' => 'AssetInformation',
			'foreignKey' => 'asset_information_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
