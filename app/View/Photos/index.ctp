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

<div class="photos index">
    <div class="wrapper">

        <?php if(!empty($photos)) { ?>
        <div class="connected-carousels">
            <div class="stage">
                <div class="carousel carousel-stage">
                    <ul>
			<?php foreach ($photos as $photo){ ?>
			<?php if($photo['Photo']['asset_information_id']==$assetID){?>

                        <li><img src="<?php echo "/img/photo/".$photo['Photo']['photo_name'];?>" width="600" height="400" alt=""></li>

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
                            <?php foreach ($photos as $photo){ ?>
                            <?php if($photo['Photo']['asset_information_id']==$assetID){?>

                                <li><img src="<?php echo "/img/photo/".$photo['Photo']['photo_name'];?>" width="50" height="50" alt=""></li>

                            <?php } ?>

                            <?php } ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php } else{ ?>
        <br><br>
        <center>
            <H3>ไม่พบภาพถ่ายพื้นที่และบริเวณรอบข้าง</H3>
        </center>
    <?php } ?>
    
    <div class="btn-group pull-right" role="group" aria-label="...">
			<?php echo $this->Form->button('<span class="glyphicon glyphicon-plus"> เพิ่มข้อมูล</span>', array('onclick' => "window.location.href='/Photos/add/$assetID '", 'type' => 'button', 'escape' => false, 'title' => __('เพิ่มข้อมูล'), 'class' => 'btn btn-default')); ?> 
		</div>
        
        <?php if(!empty($photos)){?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?php echo __('ลำดับ'); ?></th>
                <th><?php echo __('ชื่อไฟล์'); ?></th>
                <th><?php echo __('บันทึกโดย'); ?></th>
                <th><?php echo __('วันที่'); ?></th>
                <th class="actions"><?php echo __('เอกสาร'); ?></th>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($photos as $photo): ?>
            <tr>
                <td><?php echo h($photo['Photo']['id']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['photo_name']); ?>&nbsp;</td>
				<td><?php echo h($photo['Photo']['created']); ?>&nbsp;</td>
				<td><?php echo h($photo['Photo']['created_by']); ?>&nbsp;</td>
				
				

                <td class="actions">
                    <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $photo['Photo']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>
                </td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
        <?php } ?>
    </div>
</div>
<!--<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
                <li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
