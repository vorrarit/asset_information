<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; รายละเอียดทรัพย์สิน &gt; เอกสารการใช้ประโยชน์</h5>
    </div>
</div>

<div class="fileMaps index">
    <div class="products form row">
    <div class="col-lg-12">
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="/AssetInformations/view/<?php echo $assetID  ?>">รายละเอียด</a></li>
        <li role="presentation"><a href="/FileDocuments/view/<?php echo $assetID ?>">สำเนาโฉนดที่ดิน</a></li>
        <li role="presentation"><a href="/Photos/view/<?php echo $assetID  ?>">ภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation" class="active"><a>เอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
    </div>
</div>
    <div class="wrapper">   
        <?php if (!empty($fileMaps)) { ?>
            <div class="connected-carousels">
                <div class="stage">
                    <div class="carousel carousel-stage">
                        <ul>
                            <?php foreach ($fileMaps as $fileMap) { ?>
                                <?php if ($fileMap['FileMap']['asset_information_id'] == $assetID) { ?>

                                    <li><img src="<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>" width="600" height="400" alt=""></li>


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
                            <?php foreach ($fileMaps as $fileMap) { ?>
                                <?php if ($fileMap['FileMap']['asset_information_id'] == $assetID) { ?>

                                    <li><img src="<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>" width="50" height="50" alt=""></li>


                                <?php } ?>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <br><br>
            <center>
                <H3>ไม่พบเอกสารการใช้ประโยชน์พื้นที่</H3>
            </center>
        <?php } ?>
       
            
        <?php if(!empty($fileMaps)) { ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><?php echo __('ลำดับ'); ?></th>
                    <th><?php echo __('ชื่อไฟล์'); ?></th>
                    <th><?php echo __('วันที่'); ?></th>
                    <th><?php echo __('บันทึกโดย'); ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $index =0 ?>
                <?php foreach ($fileMaps as $fileMap): ?>
                    <tr>
                        <?php $index++ ;?>
                        <td><?php echo $index ?></td>
                        <td><?php echo h($fileMap['FileMap']['file_map_name']); ?>&nbsp;</td>
                        <td><?php echo h($fileMap['FileMap']['created']); ?>&nbsp;</td>
                        <td><?php echo h($fileMap['FileMap']['created_by']); ?>&nbsp;</td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
        <script>
            $(document).ready(function () {
                $("[rel^='lightbox']").prettyPhoto();
            });
        </script>
    </div>
