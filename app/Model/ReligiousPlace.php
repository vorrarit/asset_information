<?php
App::uses('AppModel', 'Model');
/**
 * ReligiousPlace Model
 *
 * @property AssetInformation $AssetInformation
 */
class ReligiousPlace extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AssetInformation' => array(
			'className' => 'AssetInformation',
			'foreignKey' => 'religious_place_id',
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
