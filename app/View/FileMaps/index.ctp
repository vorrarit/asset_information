<div class="fileMaps index">
	<h2><?php echo __('File Maps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_information_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_map_name'); ?></th>
			<th><?php echo $this->Paginator->sort('file_map_path'); ?></th>
			<th><?php echo $this->Paginator->sort('file_map_file_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fileMaps as $fileMap): ?>
	<tr>
		<td><?php echo h($fileMap['FileMap']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileMap['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileMap['AssetInformation']['id'])); ?>
		</td>
		<td><?php echo h($fileMap['FileMap']['file_map_name']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['file_map_path']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['file_map_file_type']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['created']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($fileMap['FileMap']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileMap['FileMap']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileMap['FileMap']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileMap['FileMap']['id']), array(), __('Are you sure you want to delete # %s?', $fileMap['FileMap']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New File Map'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
