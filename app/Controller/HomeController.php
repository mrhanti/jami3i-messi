<?php
class HomeController extends AppController {
	public $name = 'Home';
	public $helpers = array('Text', 'Javascript', 'Ajax');
	public $uses = array('Post', 'Comment');
	public $components = array('RequestHandler');
	
	public function index() {
		$this->set('posts', $this->Post->query('SELECT * FROM posts WHERE posts.id > ((SELECT MAX(posts.id) FROM posts) - 4);'));
		$this->set('title_for_layout', 'home');
	}
	
	public function process() {
		
	}
	
	public function ajaxRequest() {
 		if ( $this->request->is( 'ajax' )) {
		    $posts = $this->Post->find('all', array('fields' => array('Post.id', 'Post.title')));
 			
 			echo json_encode($posts);
			exit();
		
		} else {}
    }
}