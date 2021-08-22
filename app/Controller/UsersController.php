<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');

	public function beforeFilter() {
        //未ログイン者が見れるページ(それ以外はリダイレクト先に飛ぶ)
        parent::beforeFilter();
        $this->Auth->allow('sign', 'login', 'index');
    }

	public function index() {
		$data = $this->User->find('all');
		$this->set('posts', $data);
	}

	public function sign() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }


	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Flash->error(__('Invalid username or password, try again'));
	        }
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

}
?>
