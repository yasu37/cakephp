<?php
App::uses('AppController', 'Controller');

class BoardMembersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash('ユーザー名かパスワードが間違っています');
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

}
?>
