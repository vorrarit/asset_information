<div class="fileDocuments view">
<h2><?php echo __('File Document'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Information'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileDocument['AssetInformation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Doc Name'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_doc_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Doc Path'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_doc_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Doc File Type'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_doc_file_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['created_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Document'), array('action' => 'edit', $fileDocument['FileDocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Document'), array('action' => 'delete', $fileDocument['FileDocument']['id']), array(), __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
