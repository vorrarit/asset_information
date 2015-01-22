<div class="photos form">
<?php echo $this->Form->create('Photo', array('type' => 'post','enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Add Photo'); ?></legend>
	<?php
                echo $this->Form->input('id',array('type' => 'hidden'));	
                echo $this->Form->input('photo_name',array('type' => 'hidden'));
		echo $this->Form->input('photo_path',array('type' => 'hidden'));
		echo $this->Form->input('photo_file_type',array('type' => 'hidden'));
		echo $this->Form->input('created_by',array('type' => 'hidden'));
		echo $this->Form->input('modified_by',array('type' => 'hidden'));
		echo $this->Form->input('asset_information_id',array('type' => 'hidden'));
                
	?>
        <input type="file" name="data[Photo][photo]" />
                <?php echo 'Remark : File type (jpg,png,gif)'; ?>

    </fieldset>
    <?php echo $this->Form->button('Submit', array ('class' => 'btn btn-primary btn-form')); ?>
<?php echo $this->Form->end(); ?>
</div>
<!--<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
