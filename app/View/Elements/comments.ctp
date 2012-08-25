<?php echo $this->Html->script(array('jquery', 'app'), false) ?>


<div class="left" id="PostComment">
<?php
	echo $this->Form->create('Comment', array('action' => 'add'));
	echo $this->Form->hidden('post_id', array('value' => $post['Post']['id']));
?>
	<table>
		<tr>
			<th>name</th>
			<td><?php echo $this->Form->input('name', array('label' => '', 'id' => 'name')); ?></td>
		</tr>
		<tr>
			<th>email</th>
			<td><?php echo $this->Form->input('email', array('label' => '', 'id' => 'email')); ?></td>
		</tr>
		<tr>
			<th>comment</th>
			<td><?php echo $this->Form->input('content', array('label' => '', 'id' => 'content', 'rows' => '6', 'cols' => '64')); ?></td>
		</tr>
		<tr>
			<th align="right"><div class="right" id="loader"><?php echo $this->Html->image('loader.gif')?></div></th>
			<td aligh="left"><?php echo $this->Form->end('Post it!'); ?></td>
		</tr>
	</table>
	
</div>