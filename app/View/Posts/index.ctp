<?php foreach ($posts as $post) { ?>
<div class="post-preview-index">
	<span class="title"><?php echo $post['Post']['title'].'   '; ?></span><?php echo $this->Html->link('view', array('controller' => 'posts', 'action' => 'view', $post['Post']['permalink']), array('class' => 'linkSeeMore')); ?><br />
	<span class="author">par <?php echo $post['Post']['author']; ?></span><br />
	<span class="author">par <?php echo $post['Post']['created']; ?></span><br />
</div>
<?php } ?>
