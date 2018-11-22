<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Category $Category
 * @property Image $Image
 * @property Image2 $Image2
 * @property Image3 $Image3
 */
class Product extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'image_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Image2' => array(
			'className' => 'Image',
			'foreignKey' => 'image2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Image3' => array(
			'className' => 'Image',
			'foreignKey' => 'image3_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
