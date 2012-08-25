<?php
class Post extends AppModel {
	public $name = 'Post';
	public $hasMany = array(
        'Comment' => array(
            'className'  => 'Comment',
            'foreignKey' => 'post_id',
            'conditions' => array('Comment.visible' => 1),
        )
    );
}
