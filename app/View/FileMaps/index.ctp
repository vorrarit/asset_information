<div class="fileMaps index">
	<div class="wrapper">
            
            <div class="connected-carousels">
                <div class="stage">
                    <div class="carousel carousel-stage">
                        <ul>
							<?php foreach ($fileMaps as $fileMap): ?>
							
							<li><img src="<?php echo "img/filemap/".$fileMap['FileMap']['file_map_name'];?>" width="600" height="400" alt=""></li>
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
							<?php foreach ($fileMaps as $fileMap): ?>
							
							<li><img src="<?php echo "img/filemap/".$fileMap['FileMap']['file_map_name'];?>" width="50" height="50" alt=""></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
	<h2><?php echo __('File Maps'); ?></h2>
	
	<div class="btn-group pull-right" role="group" aria-label="...">
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-pencil"></span>',array('onclick'=>"window.location.href='../FileMaps/add'",'type'=>'button','escape'=>false, 'title'=>__('Add'), 'class'=>'btn btn-default')); ?>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('asset_information_id'); ?></th>
				<th><?php echo $this->Paginator->sort('file_map_name'); ?></th>
				<th><?php echo $this->Paginator->sort('file_map_path'); ?></th>
				<th><?php echo $this->Paginator->sort('file_map_file_type'); ?></th>
				<th><?php echo $this->Paginator->sort('created_by'); ?></th>
				<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
	<?php foreach ($fileMaps as $fileMap): ?>
			<tr>
				<td><?php echo h($fileMap['FileMap']['id']); ?>&nbsp;</td>
				<td>
			<?php echo $this->Html->link($fileMap['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileMap['AssetInformation']['id'])); ?>
				</td>
				<td><?php echo h($fileMap['FileMap']['file_map_name']); ?>&nbsp;</td>
				<td><?php echo h($fileMap['FileMap']['file_map_path']); ?>&nbsp;</td>
				<td><?php echo h($fileMap['FileMap']['file_map_file_type']); ?>&nbsp;</td>
				<td><?php echo h($fileMap['FileMap']['created_by']); ?>&nbsp;</td>
				<td><?php echo h($fileMap['FileMap']['modified_by']); ?>&nbsp;</td>
				<td class="actions">
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $fileMap['FileMap']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $fileMap['FileMap']['id'])); ?>

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
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('tag'=>'li', 'separator' => '', 'currentTag'=>'a', 'currentClass'=>'active'));
		echo $this->Paginator->next(__('next') . ' >', array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next disabled'));
	?>
	</div>
</div>