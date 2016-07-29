<?php
namespace App\Controller;

class UsersController extends AppController {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeRender(\Cake\Event\Event $event) {
        parent::beforeRender($event);
        if ($this->viewBuilder()->className() == null) {
            $this->viewBuilder()->className('App\View\AppView');
        }
    }
    
    public function index()
    {
        $users = ['1', '2', '4'];
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

}
