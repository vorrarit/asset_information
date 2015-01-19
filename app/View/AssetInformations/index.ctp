<div class="assetInformations index">
	<h2><?php echo __('Asset Informations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_name'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_title_deed_no'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_mapsheet_no'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_parcel_no'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_dealing_file_no'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_Boundary'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_north'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_south'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_east'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_west'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('utilization_id'); ?></th>
			<th><?php echo $this->Paginator->sort('religious_place_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_cost_estimate'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_area'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_rai'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_ngan'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_square_wah'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_gps_coordinate'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_info_remark'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($assetInformations as $assetInformation): ?>
	<tr>
		<td><?php echo h($assetInformation['AssetInformation']['id']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_name']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_mapsheet_no']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_parcel_no']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_Boundary']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_north']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_south']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_east']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_west']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetInformation['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $assetInformation['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assetInformation['District']['id'], array('controller' => 'districts', 'action' => 'view', $assetInformation['District']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assetInformation['SubDistrict']['id'], array('controller' => 'sub_districts', 'action' => 'view', $assetInformation['SubDistrict']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assetInformation['Utilization']['id'], array('controller' => 'utilizations', 'action' => 'view', $assetInformation['Utilization']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assetInformation['ReligiousPlace']['id'], array('controller' => 'religious_places', 'action' => 'view', $assetInformation['ReligiousPlace']['id'])); ?>
		</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_cost_estimate']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_area']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_rai']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_ngan']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_square_wah']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_gps_coordinate']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['asset_info_remark']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['created']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($assetInformation['AssetInformation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assetInformation['AssetInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assetInformation['AssetInformation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assetInformation['AssetInformation']['id']), array(), __('Are you sure you want to delete # %s?', $assetInformation['AssetInformation']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('action' => 'add')); ?></li>
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
