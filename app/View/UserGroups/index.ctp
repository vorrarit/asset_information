<div class="userGroups index">
	<h2><?php echo __('User Groups'); ?></h2>
	<div class="btn-group pull-right" role="group" aria-label="...">
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-pencil"></span>',array('onclick'=>"window.location.href='../user_groups/add'",'type'=>'button','escape'=>false, 'title'=>__('Add'), 'class'=>'btn btn-default')); ?>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('user_group_name'); ?></th>
				<th><?php echo $this->Paginator->sort('created_by'); ?></th>
				<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
	<?php foreach ($userGroups as $userGroup): ?>
			<tr>
				<td><?php echo h($userGroup['UserGroup']['id']); ?>&nbsp;</td>
				<td><?php echo h($userGroup['UserGroup']['user_group_name']); ?>&nbsp;</td>
				<td><?php echo h($userGroup['UserGroup']['created_by']); ?>&nbsp;</td>
				<td><?php echo h($userGroup['UserGroup']['modified_by']); ?>&nbsp;</td>
				<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $userGroup['UserGroup']['id']), array('escape'=>false, 'title'=>__('Edit'))); ?>
		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $userGroup['UserGroup']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?>
				</td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="pagination">
	<?php
echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('tag'=>'li', 'separator' => '', 'currentTag'=>'a', 'currentClass'=>'active'));
		echo $this->Paginator->next(__('next') . ' >', array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next disabled'));
	?>
	</div>
</div>
