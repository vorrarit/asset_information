<div class="row">
	<br>
	<ol class="breadcrumb">
        <li><a href="index" >จัดการทรัพย์สิน</a></li>
        <li><a href="/AssetInformations/edit/<?php echo $assetID;?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li class="active">เพิ่มสำเนาโฉนดที่ดิน</li>
    </ol>	
</div>

<div class="fileDocuments index">
    <div class="products form row">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="/AssetInformations/edit/<?php echo $assetID;?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
            <li role="presentation" class="active" ><a>เพิ่มสำเนาโฉนดที่ดิน</a></li>
            <li role="presentation"><a href="/Photos/index/<?php  echo $assetID; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID; ?>"> เพิ่มเอกสารใช้ประโยชน์พื้นที่</a></li>

        </ul>
    </div>
    <div class="wrapper">

        <div class="connected-carousels">
            <div class="stage">
                <div class="carousel carousel-stage">
                    <ul>
                            <?php foreach ($fileDocuments as $fileDocument) { ?>	
                            <?php if($fileDocument['FileDocument']['asset_information_id']==$assetID){?>
                        <li><img src="<?php echo "/files/filedocument/".$fileDocument['FileDocument']['file_doc_name'];?>" width="600" height="400" alt=""></li>
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
                             <?php foreach ($fileDocuments as $fileDocument){?>	
                           <?php if($fileDocument['FileDocument']['asset_information_id']==$assetID){?>
                        <li><img src="<?php echo "/files/filedocument/".$fileDocument['FileDocument']['file_doc_name'];?>" width="100" height="60" alt=""></li>
                           <?php } ?>
                             <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div align="right">
            <a href ="/file_documents/add" button title="Add" class ="btn btn-default" ><span class="glyphicon glyphicon-plus"></span>Add &nbsp;</a> 
        </div>
        <table class = " table table-hover">
            <thead>
                <tr>
                    <th><?php echo ('id'); ?></th>
                    <th><?php echo ('asset_information_id'); ?>&nbsp;</th>
                    <th><?php echo ('file_doc_name'); ?>&nbsp;</th>
                    <th><?php echo ('file_doc_path'); ?>&nbsp;</th>
                    <th><?php echo ('file_doc_file_type'); ?>&nbsp;</th>
                    <th><?php echo ('created_by'); ?>&nbsp;</th>
                    <th><?php echo ('created'); ?>&nbsp;</th>
                    <th class="actions"><?php echo __('Actions'); ?>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
	<?php foreach ($fileDocuments as $fileDocument): ?>
                <tr>
                    <td><?php echo h($fileDocument['FileDocument']['id']); ?>&nbsp;</td>
                    <td><?php echo $this->Html->link($fileDocument['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileDocument['AssetInformation']['id'])); ?></td>
                    <td><?php echo h($fileDocument['FileDocument']['file_doc_name']); ?>&nbsp;</td>
                    <td><?php echo h($fileDocument['FileDocument']['file_doc_path']); ?>&nbsp;</td>
                    <td><?php echo h($fileDocument['FileDocument']['file_doc_file_type']); ?>&nbsp;</td>
                    <td><?php echo h($fileDocument['FileDocument']['created_by']); ?>&nbsp;</td>
                    <td><?php echo h($fileDocument['FileDocument']['created']); ?>&nbsp;</td>
                    <td class="actions">
		<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('controller' => 'FileDocuments', 'action' => 'delete', $fileDocument['FileDocument']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?>	
                    </td>
                </tr>
<?php endforeach; ?>
            </tbody>
        </table>
       
        </div>
    </div>
</div>

