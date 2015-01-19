<div class="religiousPlaces form">
<?php echo $this->Form->create('ReligiousPlace'); ?>
	<fieldset>
		<legend><?php echo __('Edit Religious Place'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('religious_place_name');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReligiousPlace.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ReligiousPlace.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Religious Places'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
