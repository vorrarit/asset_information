<div class="fileMaps form">
<?php echo $this->Form->create('fileMap', array('type' => 'post','enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add File Map'); ?></legend>
	<?php
		echo $this->Form->input('asset_information_id');
		echo $this->Form->input('file_map_name',array('type' => 'hidden'));
		echo $this->Form->input('file_map_path',array('type' => 'hidden'));
		echo $this->Form->input('file_map_file_type',array('type' => 'hidden'));
		echo $this->Form->input('created_by',array('type' => 'hidden'));
		echo $this->Form->input('modified_by',array('type' => 'hidden'));
		
                
	?>
		<input type="file" name="data[fileMap][filemap]" />
                <?php echo 'Remark : File type (jpg,png,gif)'; ?>

	</fieldset>
    <?php echo $this->Form->button('Submit', array ('class' => 'btn btn-primary btn-form')); ?>
<?php echo $this->Form->end(); ?>
</div>