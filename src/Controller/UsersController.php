<?php
namespace App\Controller;

class UsersController extends AppController {

    public function initialize()
    {
        parent::initialize();
        
        // Uncommenting any of the following two lines prevent the JSON view from working
        // $this->viewBuilder()->className('Cake\View\View');
        // $this->viewBuilder()->className('App\View\AppView');

        $this->loadComponent('RequestHandler');
    }
    
    public function index()
    {
        $users = ['1', '2', '4'];
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

}
