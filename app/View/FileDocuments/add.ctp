<div class="fileDocuments form">
<?php echo $this->Form->create('FileDocument'); ?>
	<fieldset>
		<legend><?php echo __('Add File Document'); ?></legend>
	<?php
		echo $this->Form->input('asset_information_id');
		echo $this->Form->input('file_doc_name');
		echo $this->Form->input('file_doc_path');
		echo $this->Form->input('file_doc_file_type');
		echo $this->Form->input('created_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
