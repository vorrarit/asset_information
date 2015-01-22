<ol class="breadcrumb">
  <li><a href="../../	AssetInformations">จัดการทรัพย์สิน</a></li>
  <li class="active"><a href="/AssetInformations/edit/<?php echo $id; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
  <li class="active">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</li>
</ol>
<div class="fileMaps index">
	<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation" onclick="added()"><a href="/AssetInformations/edit/<?php echo $id; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li role="presentation"  onclick="added()"><a href="../../FileDocuments/add/<?php echo $id; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation" onclick="added()"><a href="../../Photos/add/<?php echo $id; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation" class="active" onclick="added()"><a href="../FileMaps/add/<?php echo $id; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>
	<div class="fileMaps form">
	<?php echo $this->Form->create('fileMap', array('type' => 'post','enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add File Map'); ?></legend>
	<?php //debug($id);
		echo $this->Form->input('asset_information_id',array('type' => 'readonly','value'=>$id));
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