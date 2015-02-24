<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
        <?php echo $this->Form->input('id',array('type'=>'hidden' , 'value'=>$id));?>
	<?php
        
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('name');
		echo $this->Form->input('username',array('onkeypress'=>'validate(event)'));
		echo $this->Form->input('password',array('onkeypress'=>'validate(event)'));
		
	?>

<?php echo $this->Form->button(__('Save'), array('class'=>'btn btn-primary btn-form')); ?>&nbsp;
<?php echo $this->Form->button(__('Reset'), array('type'=>'reset', 'class'=>'btn btn-default btn-form')); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /^[a-z]+[a-z0-9]*$|[0-9]|[\t]|[\b]/i;

        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault){
                alert("กรุณากรอกภาษาอังกฤษหรือตัวเลขเท่านั้น");
                theEvent.preventDefault();
            }
        }
    }
</script>
