<div class="fileDocuments form">
	<?php echo $this->Form->create('FileDocument', array('type' => 'post', 'enctype' => 'multipart/form-data')); ?>
<div class="row">
	<br>
	<ol class="breadcrumb">
        <li><a href="index" >จัดการทรัพย์สิน</a></li>
        <li><a href="/AssetInformations/edit/<?php echo $assetID;?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li class="active">เพิ่มสำเนาโฉนดที่ดิน</li>
    </ol>	
</div>

<div class="fileDocuments index">
    <div class="products form row">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="/AssetInformations/edit/<?php echo $assetID;?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
            <li role="presentation" class="active" ><a href="#">เพิ่มสำเนาโฉนดที่ดิน</a></li>
            <li role="presentation"><a href="/Photos/index/<?php  echo $assetID; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>"> เพิ่มเอกสารใช้ประโยชน์พื้นที่</a></li>
        </ul>
    </div>
    <fieldset>
		<legend><?php echo __('Add File Document'); ?></legend>
		<?php
		echo $this->Form->input('asset_information_id', array('type' => 'readonly', 'value' => $assetID));
		echo $this->Form->input('file_doc_name', array('type' => 'hidden'));
		echo $this->Form->input('file_doc_path', array('type' => 'hidden'));
		echo $this->Form->input('file_doc_file_type', array('type' => 'hidden'));
		echo $this->Form->input('created_by', array('type' => 'hidden'));
		?>
		<input type ="file" name ="data[FileDocument][document]" />
	</fieldset>
	<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary btn-form')); ?>
	<?php echo $this->Form->end(); ?>
</div>

