<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; แก้ไขข้อมูลทรัพย์สิน &gt; เพิ่มเอกสารการใช้ประโยชน์พื้นที่</h5>
    </div>
</div>

<div class="fileMaps index">
    <div class="products form row">

        <ul class="nav nav-tabs">
            <li role="presentation" onclick="added()"><a href="/AssetInformations/edit/<?php echo $id; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
            <li role="presentation"  onclick="added()"><a href="../../FileDocuments/index/<?php echo $id; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
            <li role="presentation" onclick="added()"><a href="../../Photos/index/<?php echo $id; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation" class="active" onclick="added()"><a href="#"<?php echo $id; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
        </ul>
    </div>
    <div class="fileMaps form">
        <?php echo $this->Form->create('fileMap', array('type' => 'post', 'enctype' => 'multipart/form-data')); ?>
        <fieldset>
            <div class="col-md-12">
                <h3 class="page-header" style="margin-top: 20px;">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</h3>
            </div>
            <?php
            //debug($id);
            echo $this->Form->input('asset_information_id', array('type' => 'hidden', 'value' => $id));
            echo $this->Form->input('file_map_name', array('type' => 'hidden'));
            echo $this->Form->input('file_map_path', array('type' => 'hidden'));
            echo $this->Form->input('file_map_file_type', array('type' => 'hidden'));
            echo $this->Form->input('created_by', array('type' => 'hidden'));
            echo $this->Form->input('modified_by', array('type' => 'hidden'));
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->Form->input('document : ', array('label'=>False , 'name' => 'data[fileMap][filemap]', 'type' => 'file','accept'=>"image/x-png, image/gif, image/jpeg")); ?>
                </div>
            </div>
            <?php echo 'Remark : File type (jpg,png,gif)'; ?>

        </fieldset>
        <br>
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary btn-form')); ?>
        <?php echo $this->Form->end(); ?>
    </div>
