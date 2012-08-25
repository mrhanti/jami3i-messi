<?php
class Commentscontroller extends AppController {
	public $name = 'Comments';
	
	public $components = array('RequestHandler');
	
	public function add() {
		if($this->request->is('post')) {
			if ($this->request->is('ajax')) {
				if ($this->Comment->save($this->data))
					echo json_encode($this->data);
			}
			exit();
		}
	}
}