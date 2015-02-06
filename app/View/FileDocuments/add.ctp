<div class="fileDocuments form">
    <?php echo $this->Form->create('FileDocument', array('type' => 'post', 'enctype' => 'multipart/form-data')); ?>
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; แก้ไขข้อมูลทรัพย์สิน &gt; เพิ่มสำเนาโฉนดที่ดิน</h5>
        </div>
    </div>

    <div class="fileDocuments index">
        <div class="products form row">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="/AssetInformations/edit/<?php echo $assetID; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
                <li role="presentation" class="active" ><a href="#">เพิ่มสำเนาโฉนดที่ดิน</a></li>
                <li role="presentation"><a href="/Photos/index/<?php echo $assetID; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
                <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>"> เพิ่มเอกสารใช้ประโยชน์พื้นที่</a></li>
            </ul>
        </div>
        <fieldset>
            <div class="col-md-12">
                <h3 class="page-header" style="margin-top: 20px;">เพิ่มสำเนาโฉนดที่ดิน</h3>
            </div>
            <?php
            echo $this->Form->input('asset_information_id', array('type' => 'hidden', 'value' => $assetID));
            echo $this->Form->input('file_doc_name', array('type' => 'hidden'));
            echo $this->Form->input('file_doc_path', array('type' => 'hidden'));
            echo $this->Form->input('file_doc_file_type', array('type' => 'hidden'));
            echo $this->Form->input('created_by', array('type' => 'hidden'));
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->Form->input('document : ', array('name' => 'data[FileDocument][document]', 'type' => 'file')); ?>
                </div>
            </div>
        </fieldset>
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary btn-form')); ?>
        <?php echo $this->Form->end(); ?>
    </div>

