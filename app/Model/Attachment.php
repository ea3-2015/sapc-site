<?php
App::uses('AppModel', 'Model');

/**
 * Attachment Model
 *
 */
class Attachment extends AppModel
{

    public $actsAs = [
        'Upload.Upload' => array(
            'attachment' => array(
                'thumbnailSizes' => array(
                    // 'xvga' => '1024x768',
                    'vga' => '640x480',
                    'thumb' => '100l',
                ),
                'thumbnailMethod'=> 'php',
                'fields' => array(
                    'dir' => 'dir',
                    'type' => 'type',
                    'size' => 'size',
                ),
                'deleteOnUpdate' => true,
            ),
        ),
    ];

    /**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'model' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'foreign_key' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'attachment' => array(
            'isValidMimeType' => [
                'rule' => array('isValidMimeType', array('image/jpeg', 'image/png')),
                'message' => 'El erchivo no es una imágen válida. Sólo se aceptan los formatos "JPEG" y "PNG".'
            ],
            'isValidDir' => array(
                'rule' => array('isValidDir'),
                'message' => 'El directorio de subida de archivos no existe.'
            ),
            'isWritable' => array(
                'rule' => array('isWritable', false),
                'message' => 'El directorio de subida de archivos es de sólo lectura.'
            ),
            'isSuccessfulWrite' => array(
                'rule' => 'isSuccessfulWrite',
                'message' => 'El archivo adjunto no fue escrito correctamente al servidor.'
            ),

        ),
        'size' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),

    );

    public $belongsTo = [
        'Noticia' => array(
            'className' => 'Noticia',
            'foreignKey' => 'foreign_key',
        ),
    ];
}
