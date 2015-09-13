<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('User', 'Model');
App::uses('Group', 'Model');
App::uses('Person', 'Model');
App::uses('Genre', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link    http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            ),
            'loginAction' => array(
                'controller'=>'users',
                'action'    =>'login',
                'admin'     =>false
            ),
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'dashboard',
                'admin' => true
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action'     => 'login',
                'admin'      => false  // add this so that admin actions get ignored
            ),
        ),
        'Session',
        'Flash',
        'DebugKit.Toolbar',
    );



    public function beforeFilter()
    {
        $this->initBasicData();

        //Configure AuthComponent
        // $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
        // $this->Auth->logoutRedirect = array('controller' => 'noticias','action' => 'index', 'admin' => false);
        //$this->Auth->loginRedirect = array('controller' => 'noticias', 'action' => 'index');

        //$this->Auth->authorize = 'actions';
        //$this->Auth->actionPath = 'controllers/';


        //$this->Auth->allow('index', 'view');


        if ($this->params['admin']) {
            if ($this->Auth->loggedIn()) {
                $this->Auth->allow();
                $this->layout = 'admin';
            } else {
                $this->Auth->deny();
                $this->layout = 'default';
            }
        } else {
            $this->Auth->allow();
            $this->layout = 'default';
        }

    }

    /**
     * Inicializa los datos iniciales.
     *
     * Los acos se deben generar antes, ejecutando:
     * `./Console/cake AclExtras.AclExtras aco_sync`
     *
     * @return bool
     */
    private function initBasicData()
    {
        $group = new Group();
        $user = new User();
        $person = new Person();
        $genre = new Genre();

        if ($genre->countItems() == 0) {
            self::initGenres($genre);
        }

        if ($person->countItems() == 0 || !$person->exists(1)) {
            self::initPeople($person);
        }

        if ($group->countItems() == 0) {
            self::initGroups($group);
        }

        if ($user->countItems() == 0) {
            self::initUsers($user);
        }

        $hr = $user->query('SELECT COUNT(*) AS count FROM `aros_acos`');

        // debug($hr[0][0]['count']);

        if ((integer)$hr[0][0]['count'] == 0) {
            $this->initGroupsPermissions();
        }

        return true;
    }

    /**
     * Crea los grupos predeterminados: Administradores, Empleados y Beneficiarios.
     * Tambi�n inicializa los permisos por grupo.
     *
     *
     * */
    private static function initGroups(Group $group)
    {
        $groups = array(
            array('id' => 1, 'name' => 'Administradores'),
            array('id' => 2, 'name' => 'Editores'),
        );

        foreach ($groups as $data){
            $group->create();
            $group->save($data);
        }

        return true;
    }

    private function initGroupsPermissions()
    {
        $g = new Group();
        $g->id = 1;
        $this->Acl->allow($g,    'controllers');

        $g->id = 2;

        $this->Acl->deny($g,        'controllers');
        $this->Acl->allow($g,        'controllers/Noticias');
        $this->Acl->deny($g,        'controllers/Noticias/delete');
    }

    /**
     * Crea un usuario temporal inicial cuando no se ha agregado ninguno.
     *
     *
     * */
    private static function initUsers(User $user) {
        $users = array(
            array(
                'id' => 1,
                'username' => 'admin',
                'password' => 'admin SAPC',
                'person_id' => 1,
                'group_id' => 1,
            ),
        );

        foreach ($users as $data){
            $user->create();

            $user->save($data);
        }
        return true;
    }

    private static function initPeople(Person $person)
    {
        $data = array(
            'id' => 1,
            'name' => 'Nelson',
            'last_name' => 'Martell',
            'genre_id' => 1
        );

        $person->create();
        $person->save($data);
        return true;
    }

    private static function initGenres(Genre $gender)
    {
        $datas = array(
            array(
                'id' => 1,
                'name' => 'Hombre',
            ),
            array(
                'id' => 2,
                'name' => 'Mujer',
            ),
        );

        foreach ($datas as $data){
            $gender->create();

            $gender->save($data);
        }
        return true;
    }
}
