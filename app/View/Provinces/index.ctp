<div class="provinces index">
	<h2><?php echo __('Provinces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('province_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($provinces as $province): ?>
	<tr>
		<td><?php echo h($province['Province']['id']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['province_name']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['created']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $province['Province']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $province['Province']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $province['Province']['id']), array(), __('Are you sure you want to delete # %s?', $province['Province']['id'])); ?>
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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Districts'), array('controller' => 'sub_districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub District'), array('controller' => 'sub_districts', 'action' => 'add')); ?> </li>
	</ul>
</div>
