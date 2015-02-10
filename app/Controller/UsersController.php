<?php

App::uses('AppController', 'Controller', 'BlowfishPasswordHasher');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function beforeFilter() {
        $this->Auth->allow('login', 'add');
        parent::beforeFilter();
    }

    public function login($username = '') {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password , try  again'), 'default', array('class' => 'alert alert-danger'));
        }

        $this->layout = 'login_layout';
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $useradd = $this->request->data['User']['username'];
            $chkuseradd = $this->User->find('first', array('conditions' => array('User.username' => trim($useradd))));
            if (empty($chkuseradd)) {
                $this->User->create();
                $currentUser = $this->Session->read('Auth.User');
                $this->request->data['User']['created_by'] = $currentUser['name'];
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                }
            } else {
                $this->Session->setFlash(__('This Username could be used REASON:This username has been used already'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $userGroups = $this->User->UserGroup->find('list', array('empty' => '(Please Select)',
            'fields' => array(
                'UserGroup.id',
                'UserGroup.user_group_name',
            ),
            'order' => array('UserGroup.user_group_name')
                )
        );
        $this->set(compact('userGroups'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $currentUser = $this->Session->read('Auth.User');
            $this->request->data['User']['modified_by'] = $currentUser['name'];
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $userGroups = $this->User->UserGroup->find('list', array('empty' => '(Please Select)',
            'fields' => array(
                'UserGroup.id',
                'UserGroup.user_group_name',
            ),
            'order' => array('UserGroup.user_group_name')
                )
        );
        $this->set(compact('userGroups'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        $user = $this->User->find('first', array('conditions' => array('User.id' => $id)));

        $username = $user['User']['username'];

        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
//		$this->request->allowMethod('post', 'delete');
        if ($username == 'admin') {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        } else {
            if ($this->User->delete()) {
                $this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
            } else {
                $this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        return $this->redirect(array('action' => 'index'));
    }

}
