<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		
	?>

<?php echo $this->Form->button(__('Save'), array('class'=>'btn btn-primary btn-form')); ?>&nbsp;
<?php echo $this->Form->button(__('Reset'), array('type'=>'reset', 'class'=>'btn btn-default btn-form')); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

