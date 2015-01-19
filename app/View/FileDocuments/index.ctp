<div class="fileDocuments index">
	<h2><?php echo __('File Documents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_information_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_doc_name'); ?></th>
			<th><?php echo $this->Paginator->sort('file_doc_path'); ?></th>
			<th><?php echo $this->Paginator->sort('file_doc_file_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fileDocuments as $fileDocument): ?>
	<tr>
		<td><?php echo h($fileDocument['FileDocument']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileDocument['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileDocument['AssetInformation']['id'])); ?>
		</td>
		<td><?php echo h($fileDocument['FileDocument']['file_doc_name']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_doc_path']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_doc_file_type']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['created_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileDocument['FileDocument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileDocument['FileDocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileDocument['FileDocument']['id']), array(), __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New File Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
