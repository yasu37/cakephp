<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id) {
		if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}

	public function edit() {
		if (!$id) {
        	throw new NotFoundException(__('Invalid post'));
    	}

    	$post = $this->Post->findById($id);
    	if (!$post) {
    	    throw new NotFoundException(__('Invalid post'));
    	}

    	if ($this->request->is(array('post', 'put'))) {
    	    $this->Post->id = $id;
    	    if ($this->Post->save($this->request->data)) {
   	        	$this->Flash->success(__('Your post has been updated.'));
            	return $this->redirect(array('action' => 'index'));
        	}
        	$this->Flash->error(__('Unable to update your post.'));
    	}

    	if (!$this->request->data) {
    	    $this->request->data = $post;
    	}

	}

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Flash->error(__('Invalid username or password, try	 again'));
	        }
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}
}
