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

    public $hasMany = array(
        'Image' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'Noticia',
            ),
			'dependent' => true,
            'exclusive' => true,
        ),
    );

    /**
     * Crea la noticia con imágenes adjuntas.
     *
     * @param  array $data [description]
     * @return bool
     */
    public function createWithAttachments(array $data)
    {
        // Sanitize your images before adding them
        $images = array();
        if (!empty($data['Image'][0])) {
            foreach ($data['Image'] as $i => $image) {
                if (is_array($data['Image'][$i])) {
                    // Force setting the `model` field to this model
                    $image['model'] = 'Noticia';

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($image['foreign_key'])) {
                        unset($image['foreign_key']);
                    }

                    $images[] = $image;
                }
            }
        }

        // debug($images);
        $data['Image'] = $images;

        // Try to save the data using Model::saveAll()
        $this->create();
        if ($this->saveAll($data)) {
            return true;
        }

        // Throw an exception for the controller
        throw new Exception(__("This news could not be saved. Please try again"));
    }
}
