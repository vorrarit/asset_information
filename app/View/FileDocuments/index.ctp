<div class="fileDocuments index">
    <h2><?php echo __('File Documents'); ?></h2>
    <div class="wrapper">
            
            <div class="connected-carousels">
                <div class="stage">
                    <div class="carousel carousel-stage">
                        <ul>
                            <?php foreach ($fileDocuments as $fileDocument):?>					
			<li><img src="<?php echo "files/filedocument/".$fileDocument['FileDocument']['file_doc_name'];?>" width="600" height="400" alt=""></li>
                            <?php endforeach; ?>
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
                            <?php foreach ($fileDocuments as $fileDocument): ?>
                        <li><img src="<?php echo "files/filedocument/".$fileDocument['FileDocument']['file_doc_name'];?>" width="100" height="60" alt=""></li>
                            <?php endforeach; ?>
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
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('asset_information_id'); ?>&nbsp;</th>
                <th><?php echo $this->Paginator->sort('file_doc_name'); ?>&nbsp;</th>
                <th><?php echo $this->Paginator->sort('file_doc_path'); ?>&nbsp;</th>
                <th><?php echo $this->Paginator->sort('file_doc_file_type'); ?>&nbsp;</th>
                <th><?php echo $this->Paginator->sort('created_by'); ?>&nbsp;</th>
                <th><?php echo $this->Paginator->sort('created'); ?>&nbsp;</th>
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
    <p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
    <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>
<!--<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New File Document'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
    </ul>
</div>-->

