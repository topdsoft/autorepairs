<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property Make $Make
 * @property Automodel $Automodel
 * @property Engine $Engine
 * @property Mileage $Mileage
 */
class Vehicle extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'year' => array(
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
		'Make' => array(
			'className' => 'Make',
			'foreignKey' => 'make_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Automodel' => array(
			'className' => 'Automodel',
			'foreignKey' => 'automodel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Engine' => array(
			'className' => 'Engine',
			'foreignKey' => 'engine_id',
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
		'Mileage' => array(
			'className' => 'Mileage',
			'foreignKey' => 'vehicle_id',
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
