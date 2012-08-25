<?php

class PostsController extends AppController {
	public $name = 'Posts';
	public $uses = array('Post', 'Comment');
	public $helpers = array('Form', 'Javascript', 'Ajax');
	public $components = array('RequestHandler');
	
	public function index() {
		$this->set('posts', $this->Post->find('all'));
		$this->set('title_for_layout', 'all posts');
	}
	
	public function view($id = null) {
		$this->set('post', $this->Post->findByPermalink($id));
		$this->set('title_for_layout', 'post');
	}
}