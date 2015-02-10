<div class="userGroups form">
<?php echo $this->Form->create('UserGroup'); ?>
    <fieldset>
        <legend><?php echo __('Add User Group'); ?></legend>
	<?php
		echo $this->Form->input('user_group_name');
                echo $this->Form->input('m001', array('type'=>'checkbox', 'value' => 'Y', 'label'=>false, 'checkboxLabel'=>'View Asset'));
                echo $this->Form->input('m002', array('type'=>'checkbox', 'value' => 'Y','label'=>false,'checkboxLabel'=>'Add Asset'));
	?>
<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary btn-form')); ?>&nbsp;
<?php echo $this->Form->button(__('Reset'), array('type'=>'reset', 'class'=>'btn btn-default btn-form')); ?>
    </fieldset>
</div>

