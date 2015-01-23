<div class="fileDocuments form">
<?php echo $this->Form->create('FileDocument',array('type' => 'post','enctype' => 'multipart/form-data')); ?>
    <ol class="breadcrumb">
        <li><a href="index" >จัดการทรัพย์สิน</a></li>
        <li class="active">เพิ่มข้อมูลทรัพย์สิน</li>
    </ol>	
    <div class="products form row">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="/AssetionInformation/edit/<?php echo $assetID;?>">แก้ไขข้อมูลทรัพย์</a></li>
            <li role="presentation"><a href="/FileMaps/index/<?php  echo $assetID; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
            <li role="presentation"><a href="/Photos/index/<?php echo $assetID; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation" class="active" ><a> เพิ่มเอกสารใช้ประโยชน์พื้นที่</a></li>
 
        </ul>
    </div>
    <fieldset>
		<legend><?php echo __('Add File Document'); ?></legend>
	<?php
		echo $this->Form->input('asset_information_id',array('type'=>'hidden'));
		echo $this->Form->input('file_doc_name',array('type' => 'hidden'));
		echo $this->Form->input('file_doc_path',array('type' => 'hidden'));
		echo $this->Form->input('file_doc_file_type',array('type' => 'hidden'));
		echo $this->Form->input('created_by',array('type' => 'hidden'));
	?>
                <input type ="file" name ="data[FileDocument][document]" />
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

