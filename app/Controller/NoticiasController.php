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
            'limit' => 3,
            'order' => array('Noticias.title' => 'asc')
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
    public function npublic()
    {
        $this->Noticia->recursive = 0;
        $this->Paginator->settings =$this->paginate;
            $this->set('noticias',$this->paginate());
            $this->layout = 'general';
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
            throw new NotFoundException(__('Noticia Invalida'));
        }
        $options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
        $this->set('noticia', $this->Noticia->find('first', $options));
        $this->layout = 'general';
        
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
                $this->Flash->success(__('Noticia Guardada.'));
               
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Noticia no guardada, intente de nuevo.'));
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
            throw new NotFoundException(__('Noticia Invalida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Noticia->save($this->request->data)) {
                $this->Flash->success(__('Noticia Actualizada.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Noticia no actualizada, intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
            $this->request->data = $this->Noticia->find('first', $options);
        }
        $users = $this->Noticia->User->find('list');
            $this->set(compact('users'));
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
            throw new NotFoundException(__('Noticia Invalida'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Noticia->delete()) {
            $this->Flash->success(__('Noticia Borrada.'));
        } else {
            $this->Flash->error(__('Noticia no borrada, intente de nuevo'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    


}
