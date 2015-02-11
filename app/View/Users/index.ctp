<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	
	
	<div class="btn-group pull-right" role="group" aria-label="...">
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-pencil"></span>',array('onclick'=>"window.location.href='../users/add'",'type'=>'button','escape'=>false, 'title'=>__('Add'), 'class'=>'btn btn-default')); ?>
	</div>
	<table  class="table table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('user_group_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		 <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified_by']); ?>&nbsp;</td>
		<td>
				<?php echo h($user['UserGroup']['user_group_name']); ?>
		</td>
		<td class="actions">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $user['User']['id']), array('escape'=>false, 'title'=>__('Edit'))); ?>
		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $user['User']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="pagination">
	<?php
echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('tag'=>'li', 'separator' => '', 'currentTag'=>'a', 'currentClass'=>'active'));
		echo $this->Paginator->next(__('next') . ' >', array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next disabled'));
	?>
	</div>
</div>
</div>
