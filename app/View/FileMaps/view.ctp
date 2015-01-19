<div class="fileMaps view">
<h2><?php echo __('File Map'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Information'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileMap['AssetInformation']['id'], array('controller' => 'asset_informations', 'action' => 'view', $fileMap['AssetInformation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Map Name'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['file_map_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Map Path'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['file_map_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Map File Type'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['file_map_file_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fileMap['FileMap']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Map'), array('action' => 'edit', $fileMap['FileMap']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Map'), array('action' => 'delete', $fileMap['FileMap']['id']), array(), __('Are you sure you want to delete # %s?', $fileMap['FileMap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Maps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Map'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
