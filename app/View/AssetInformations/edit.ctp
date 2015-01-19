<div class="assetInformations form">
<?php echo $this->Form->create('AssetInformation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Asset Information'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('asset_info_name');
		echo $this->Form->input('asset_info_title_deed_no');
		echo $this->Form->input('asset_info_mapsheet_no');
		echo $this->Form->input('asset_info_parcel_no');
		echo $this->Form->input('asset_info_dealing_file_no');
		echo $this->Form->input('asset_info_Boundary');
		echo $this->Form->input('asset_info_north');
		echo $this->Form->input('asset_info_south');
		echo $this->Form->input('asset_info_east');
		echo $this->Form->input('asset_info_west');
		echo $this->Form->input('province_id');
		echo $this->Form->input('district_id');
		echo $this->Form->input('sub_district_id');
		echo $this->Form->input('utilization_id');
		echo $this->Form->input('religious_place_id');
		echo $this->Form->input('asset_info_cost_estimate');
		echo $this->Form->input('asset_area');
		echo $this->Form->input('asset_info_rai');
		echo $this->Form->input('asset_info_ngan');
		echo $this->Form->input('asset_info_square_wah');
		echo $this->Form->input('asset_info_gps_coordinate');
		echo $this->Form->input('asset_info_remark');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssetInformation.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AssetInformation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Districts'), array('controller' => 'sub_districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub District'), array('controller' => 'sub_districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilizations'), array('controller' => 'utilizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilization'), array('controller' => 'utilizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Religious Places'), array('controller' => 'religious_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Religious Place'), array('controller' => 'religious_places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Maps'), array('controller' => 'file_maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Map'), array('controller' => 'file_maps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
