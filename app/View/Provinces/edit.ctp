<div class="provinces form">
<?php echo $this->Form->create('Province'); ?>
	<fieldset>
		<legend><?php echo __('Edit Province'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('province_name');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Province.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Province.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Districts'), array('controller' => 'sub_districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub District'), array('controller' => 'sub_districts', 'action' => 'add')); ?> </li>
	</ul>
</div>
