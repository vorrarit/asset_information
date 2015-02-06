<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; แก้ไขข้อมูลทรัพย์สิน &gt; เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</h5>
    </div>
</div>

<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation"><a href="/AssetInformations/edit/<?php echo $assetID; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li role="presentation"><a href="/FileDocuments/index/<?php echo $assetID; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation" class = "active"><a>เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>

<div class="photos form">
    <?php echo $this->Form->create('Photo', array('type' => 'post', 'enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <div class="col-md-12">
            <h3 class="page-header" style="margin-top: 20px;">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</h3>
        </div>
        <?php
        echo $this->Form->input('asset_information_id', array('type' => 'hidden', 'value' => $assetID));
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('photo_name', array('type' => 'hidden'));
        echo $this->Form->input('photo_path', array('type' => 'hidden'));
        echo $this->Form->input('photo_file_type', array('type' => 'hidden'));
        echo $this->Form->input('created_by', array('type' => 'hidden'));
        echo $this->Form->input('modified_by', array('type' => 'hidden'));
        echo $this->Form->input('asset_information_id', array('type' => 'hidden'));
        ?>

        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->Form->input('photo : ', array('name' => 'data[Photo][photo]', 'type' => 'file')); ?>
            </div>
        </div>
        <?php echo 'Remark : File type (jpg,png,gif)'; ?>
    </fieldset>
    <br>

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
