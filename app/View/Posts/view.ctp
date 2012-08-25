<h2><?php echo $post['Post']['title']; ?></h2>
<br />
<span class="author"><?php echo $post['Post']['author']; ?> | </span><span class="created"><?php echo $post['Post']['created']?></span><span class="views"> | <b><?php echo $post['Post']['views']; ?></b> views</span>
<div class="left" id="Post">
	<p>
		<?php echo $post['Post']['content']; ?>
	</p>
</div>

<?php if($post['Comment'] == null || empty($post['Comment'])) { ?>
	<div class="center" id="noComments">
		<span>no comments,</span><br />
		<span style="font-size: 14px; color: #424240">so be the first to post one</span>
	</div>
	<div class="left" id="comments" style="min-height: 0">
	</div>
<?php } else { ?>
<div class="left" id="comments">
	<?php 
		$comments = $post['Comment'];
		foreach ($comments as $c) {
	?>
		<div class="comment left">
			<span id="name"><?php echo $c['name'] ?></span> <span id="created">le <?php echo $c['created'] ?></span>
			<div id="content"><?php echo $c['content'] ?></div>
		</div>	
	<?php } ?>
</div>
<?php } ?>
<br />
<?php echo $this->element('comments'); ?>