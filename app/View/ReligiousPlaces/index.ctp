<div class="religiousPlaces index">
	<h2><?php echo __('Religious Places'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('religious_place_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($religiousPlaces as $religiousPlace): ?>
	<tr>
		<td><?php echo h($religiousPlace['ReligiousPlace']['id']); ?>&nbsp;</td>
		<td><?php echo h($religiousPlace['ReligiousPlace']['religious_place_name']); ?>&nbsp;</td>
		<td><?php echo h($religiousPlace['ReligiousPlace']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($religiousPlace['ReligiousPlace']['created']); ?>&nbsp;</td>
		<td><?php echo h($religiousPlace['ReligiousPlace']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($religiousPlace['ReligiousPlace']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $religiousPlace['ReligiousPlace']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $religiousPlace['ReligiousPlace']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $religiousPlace['ReligiousPlace']['id']), array(), __('Are you sure you want to delete # %s?', $religiousPlace['ReligiousPlace']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Religious Place'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
