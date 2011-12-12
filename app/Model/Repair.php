<?php
App::uses('AppModel', 'Model');
/**
 * Repair Model
 *
 * @property Vehicle $Vehicle
 * @property Repairtype $Repairtype
 */
class Repair extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cost' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mileage' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Repairtype' => array(
			'className' => 'Repairtype',
			'foreignKey' => 'repairtype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
