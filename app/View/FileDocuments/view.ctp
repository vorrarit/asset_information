<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; รายละเอียดทรัพย์สิน &gt; สำเนาโฉนดที่ดิน</h5>
    </div>
</div>

<div class="fileDocuments index">
    <div class="products form row">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="/AssetInformations/view/<?php echo $assetID; ?>">รายละเอียด</a></li>
            <li role="presentation" class="active" ><a href="#">สำเนาโฉนดที่ดิน</a></li>
            <li role="presentation"><a href="/Photos/view/<?php echo $assetID; ?>">ภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation"><a href="/FileMaps/view/<?php echo $assetID; ?>"> เอกสารการใช้ประโยชน์พื้นที่</a></li>
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
                                <li><img src="<?php echo "/files/filedocument/" . $fileDocument['FileDocument']['file_doc_name']; ?>" width="50" height="50" alt=""></li>
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
        <?php if(!empty($fileDocuments)){?>
        
        <table class = " table table-hover">
            <thead>
                <tr>
                    <th><?php echo ('ลำดับ'); ?></th>
                    <th><?php echo ('ชื่อไฟล์'); ?>&nbsp;</th>
                    <th><?php echo ('วันที่'); ?>&nbsp;</th>
                    <th><?php echo ('บันทึกโดย'); ?>&nbsp;</th>
              
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fileDocuments as $fileDocument): ?>
                    <tr>
                        <td><?php echo h($fileDocument['FileDocument']['id']); ?>&nbsp;</td>                  
                        <td><?php echo h($fileDocument['FileDocument']['file_doc_name']); ?>&nbsp;</td>
                        <td><?php echo h($fileDocument['FileDocument']['created']); ?>&nbsp;</td>
                        <td><?php echo h($fileDocument['FileDocument']['created_by']); ?>&nbsp;</td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php } ?>
        
        
    </div>
</div>
</div>

