<div class="fileDocuments form">
<?php echo $this->Form->create('FileDocument',array('type' => 'post','enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add File Document'); ?></legend>
	<?php
		echo $this->Form->input('asset_information_id',array('readonly'=>'true'));
		echo $this->Form->input('file_doc_name',array('type' => 'hidden'));
		echo $this->Form->input('file_doc_path',array('type' => 'hidden'));
		echo $this->Form->input('file_doc_file_type',array('type' => 'hidden'));
		echo $this->Form->input('created_by',array('type' => 'hidden'));
	?>
                <input type ="file" name ="data[FileDocument][document]" />
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
