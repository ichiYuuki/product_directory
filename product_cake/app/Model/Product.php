<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Maker $Maker
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'puroduct_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'puroduct_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'maker_id' => array(
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
		'Maker' => array(
			'className' => 'Maker',
			'foreignKey' => 'maker_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
