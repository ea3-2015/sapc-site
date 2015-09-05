<?php
App::uses('AppModel', 'Model');
/**
 * Noticia Model
 *
 * @property User $User
 */
class Noticia extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $displayField = 'id';
	public $actsAs = array(
			'Upload.Upload' => array(
				'foto'=> array ( 
					'fields' => array(
						'dir'=>'foto_dir'
						),
							'thumbnailMethod'=>'php',
							'thumbnailSizes' => array(
								'vga' => '400x400',
								 'thumb'=>'100x100'
								 ),
								'deleteOnUpdate' => true,
								'deleteFolderOnDelete' => true
					   )
				)
		);
	public $validate = array(
		'title' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
