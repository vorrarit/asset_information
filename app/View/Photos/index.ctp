<ol class="breadcrumb">
    <li><a href="index">จัดการทรัพย์สิน</a></li>
    <!--<li><a href="index">แก้ไขข้อมูลทรัพสินย์</a></li>-->
    <li class="active">เพิ่มข้อมูลทรัพย์สิน</li>
</ol>
<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation"><a href="/AssetInformations/edit/">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation" class = "active"><a>เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileDocuments/index/<?php echo $assetID; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>

<div class="photos index">
    <div class="wrapper">

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

    <h2><?php echo __('Photos'); ?></h2>
    <div align = "right" >
        <a href="/photos/add" button title="Add" class="btn btn-default"><span class="glyphicon glyphicon-plus">&nbsp;Add</span></a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?php echo ('id'); ?></th><th>
                            <?php echo ('asset_information_id'); ?></th>
                <th><?php echo ('photo_name'); ?></th>
                <th><?php echo ('photo_path'); ?></th>
                <th><?php echo ('photo_file_type'); ?></th>
<!--			<th><?php echo ('created_by'); ?></th>
                <th><?php echo ('created'); ?></th>
                <th><?php echo ('modified_by'); ?></th>
                <th><?php echo ('modified'); ?></th>-->

                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($photos as $photo): ?>
            <tr>
                <td><?php echo h($photo['Photo']['id']); ?>&nbsp;</td>
                <td><?php echo $this->Html->link($photo['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $photo['AssetInformation']['id'])); ?></td>
                <td><?php echo h($photo['Photo']['photo_name']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['photo_path']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['photo_file_type']); ?>&nbsp;</td>
<!--		<td><?php echo h($photo['Photo']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['created']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['modified_by']); ?>&nbsp;</td>
                <td><?php echo h($photo['Photo']['modified']); ?>&nbsp;</td>-->

                <td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $photo['Photo']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $photo['Photo']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $photo['Photo']['id']), array(), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>
                        <?php //echo $this->Html->link('<span class="glyphicon glyphicon-paperclip"></span>', array('action' => 'view', $photo['Photo']['id']), array('escape'=>false, 'title'=>__('View'))); ?>
                        <?php // echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $photo['Photo']['id']), array('escape'=>false, 'title'=>__('Edit'))); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $photo['Photo']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>

                </td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
  
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
