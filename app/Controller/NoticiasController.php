<?php
App::uses('AppController', 'Controller');
/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 * @property PaginatorComponent $Paginator
 */
class NoticiasController extends AppController
{

/**
 * Components
 *
 * @var array
 */
    public $helpers = array('Html','Form','Time','Js');
    public $components = array('Paginator', 'Session','RequestHandler');
    public $paginate = array (
            'limit' => 2,
            'order' => array('Noticia.title' => 'asc')
            );

/**
 * index method
 *
 * @return void
 */
    public function index()
    {
        $this->Noticia->recursive = 0;
        $this->Paginator->settings =$this->paginate;
            $this->set('noticias',$this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null)
    {
        if (!$this->Noticia->exists($id)) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        $options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
        $this->set('noticia', $this->Noticia->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Noticia->create();
            if ($this->Noticia->save($this->request->data)) {
                $this->Flash->success(__('The noticia has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
           
        }
           $users = $this->Noticia->User->find('list');
            $this->set(compact('users'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null)
    {
        if (!$this->Noticia->exists($id)) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Noticia->save($this->request->data)) {
                $this->Flash->success(__('The noticia has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
            $this->request->data = $this->Noticia->find('first', $options);
        }
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null)
    {
        $this->Noticia->id = $id;
        if (!$this->Noticia->exists()) {
            throw new NotFoundException(__('Invalid noticia'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Noticia->delete()) {
            $this->Flash->success(__('The noticia has been deleted.'));
        } else {
            $this->Flash->error(__('The noticia could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
