<?php
App::uses('AppModel', 'Model');
/**
 * Utilization Model
 *
 * @property AssetInformation $AssetInformation
 */
class Utilization extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AssetInformation' => array(
			'className' => 'AssetInformation',
			'foreignKey' => 'utilization_id',
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
