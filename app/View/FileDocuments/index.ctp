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
            <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>"> เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <?php if(!empty($fileDocuments)){?>
        <div class="connected-carousels">
            <div class="stage">
                <div class="carousel carousel-stage">
                    <ul>
                        
                        <?php foreach ($fileDocuments as $fileDocument) { ?>	
                            <?php if ($fileDocument['FileDocument']['asset_information_id'] == $assetID) { ?>
                                <li><img src="<?php echo "/files/filedocument/" . $fileDocument['FileDocument']['file_doc_name']; ?>" width="600" height="400" alt=""></li>
                            <?php } ?>
                        <?php } ?>
                        
                    </ul>
                </div>
                <a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
                <a href="#" class="next next-stage"><span>&rsaquo;</span></a>
            </div>

            <div class="navigation">
                <a href="#" class="prev prev-navigation">&lsaquo;</a>
                <a href="#" class="next next-navigation">&rsaquo;</a>
                <div class="carousel carousel-navigation">
                    <ul>
                        <?php foreach ($fileDocuments as $fileDocument) { ?>	
                            <?php if ($fileDocument['FileDocument']['asset_information_id'] == $assetID) { ?>
                                <li><img src="<?php echo "/files/filedocument/" . $fileDocument['FileDocument']['file_doc_name']; ?>" width="100" height="60" alt=""></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <?php } else{ ?>
        <br><br>
        <center>
            <H3>ไม่พบสำเนาโฉนดที่ดิน</H3>
        </center>
        <?php } ?>
        <br>
        <div class="btn-group pull-right" role="group" aria-label="...">
            <?php echo $this->Form->button('<span class="glyphicon glyphicon-plus"> เพิ่มข้อมูล</span>', array('onclick' => "window.location.href='/FileDocuments/add/$assetID '", 'type' => 'button', 'escape' => false, 'title' => __('เพิ่มข้อมูล'), 'class' => 'btn btn-default')); ?> 
        </div>
        
        <?php if(!empty($fileDocuments)){?>
        
        <table class = " table table-hover">
            <thead>
                <tr>
                    <th><?php echo ('ลำดับ'); ?></th>
                    <th><?php echo ('ชื่อไฟล์'); ?>&nbsp;</th>
                    <th><?php echo ('วันที่'); ?>&nbsp;</th>
                    <th><?php echo ('บันทึกโดย'); ?>&nbsp;</th>
                    <th class="actions"><?php echo __('เอกสาร'); ?>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fileDocuments as $fileDocument): ?>
                    <tr>
                        <td><?php echo h($fileDocument['FileDocument']['id']); ?>&nbsp;</td>                  
                        <td><?php echo h($fileDocument['FileDocument']['file_doc_name']); ?>&nbsp;</td>
                        <td><?php echo h($fileDocument['FileDocument']['created']); ?>&nbsp;</td>
                        <td><?php echo h($fileDocument['FileDocument']['created_by']); ?>&nbsp;</td>

                        <td class="actions">
                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('controller' => 'FileDocuments', 'action' => 'delete', $fileDocument['FileDocument']['id']), array('escape' => false, 'title' => __('Delete')), __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?>	
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php } ?>
        
        
    </div>
</div>
</div>

