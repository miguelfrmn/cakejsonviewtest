<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

class UsersController extends \Cake\Controller\Controller {

   public function initialize() {
        parent::initialize();

        $this->viewBuilder()->className('Admin\View\AppView');
        $this->viewBuilder()->className('App\View\AppView');
        // $this->viewBuilder()->className('Cake\View\View');

        $this->loadComponent('RequestHandler');
	}
   
    public function index() {
        $users = ['1', '2', '4'];
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    
}
