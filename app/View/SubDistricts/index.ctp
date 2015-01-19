<div class="subDistricts index">
	<h2><?php echo __('Sub Districts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_district_name'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subDistricts as $subDistrict): ?>
	<tr>
		<td><?php echo h($subDistrict['SubDistrict']['id']); ?>&nbsp;</td>
		<td><?php echo h($subDistrict['SubDistrict']['sub_district_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subDistrict['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $subDistrict['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subDistrict['District']['id'], array('controller' => 'districts', 'action' => 'view', $subDistrict['District']['id'])); ?>
		</td>
		<td><?php echo h($subDistrict['SubDistrict']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($subDistrict['SubDistrict']['created']); ?>&nbsp;</td>
		<td><?php echo h($subDistrict['SubDistrict']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($subDistrict['SubDistrict']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subDistrict['SubDistrict']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subDistrict['SubDistrict']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subDistrict['SubDistrict']['id']), array(), __('Are you sure you want to delete # %s?', $subDistrict['SubDistrict']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sub District'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
