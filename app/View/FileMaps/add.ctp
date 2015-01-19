<div class="fileMaps form">
<?php echo $this->Form->create('FileMap'); ?>
	<fieldset>
		<legend><?php echo __('Add File Map'); ?></legend>
	<?php
		echo $this->Form->input('asset_information_id');
		echo $this->Form->input('file_map_name');
		echo $this->Form->input('file_map_path');
		echo $this->Form->input('file_map_file_type');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Maps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
