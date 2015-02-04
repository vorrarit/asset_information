<ol class="breadcrumb">
	<li><a href="index">จัดการทรัพย์สิน</a></li>
	<li class="active">เพิ่มข้อมูลทรัพย์สิน</li>
</ol>
<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation"><a href="/AssetInformations/edit/<?php echo $assetID; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation" class = "active"><a>เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileDocuments/index/<?php echo $assetID; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>

<div class="photos form">
	<?php echo $this->Form->create('Photo', array('type' => 'post', 'enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Add Photo'); ?></legend>
		<?php
		echo $this->Form->input('asset_information_id', array('type' => 'readonly', 'value' => $assetID));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('photo_name', array('type' => 'hidden'));
		echo $this->Form->input('photo_path', array('type' => 'hidden'));
		echo $this->Form->input('photo_file_type', array('type' => 'hidden'));
		echo $this->Form->input('created_by', array('type' => 'hidden'));
		echo $this->Form->input('modified_by', array('type' => 'hidden'));
		echo $this->Form->input('asset_information_id', array('type' => 'hidden'));
		?>
        <input type="file" name="data[Photo][photo]" />
		<?php echo 'Remark : File type (jpg,png,gif)'; ?>

    </fieldset>
	<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary btn-form')); ?>
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
