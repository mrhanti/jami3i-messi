<h2>last posts</h2>
<?php foreach ($posts as $post) { ?>
<div class="left post-preview">
	<span class="title"><?php echo $post['posts']['title']; ?></span>
	<br />
	<span class="author"><?php echo $post['posts']['author']; ?> | </span><span class="created"><?php echo $post['posts']['created']?></span>
	<p>
		<?php echo $this->Text->truncate($post['posts']['content'], 300, array('ending' => '...')); ?>
	</p>
	<?php echo $this->Html->link('suite', array('controller' => 'posts', 'action' => 'view', $post['posts']['permalink']), array('class' => 'right linkSeeMore')); ?>
</div>
<?php } ?>
