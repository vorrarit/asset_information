<div class="subDistricts view">
<h2><?php echo __('Sub District'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub District Name'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['sub_district_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subDistrict['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $subDistrict['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subDistrict['District']['id'], array('controller' => 'districts', 'action' => 'view', $subDistrict['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subDistrict['SubDistrict']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub District'), array('action' => 'edit', $subDistrict['SubDistrict']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub District'), array('action' => 'delete', $subDistrict['SubDistrict']['id']), array(), __('Are you sure you want to delete # %s?', $subDistrict['SubDistrict']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Districts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub District'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Informations'); ?></h3>
	<?php if (!empty($subDistrict['AssetInformation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asset Info Name'); ?></th>
		<th><?php echo __('Asset Info Title Deed No'); ?></th>
		<th><?php echo __('Asset Info Mapsheet No'); ?></th>
		<th><?php echo __('Asset Info Parcel No'); ?></th>
		<th><?php echo __('Asset Info Dealing File No'); ?></th>
		<th><?php echo __('Asset Info Boundary'); ?></th>
		<th><?php echo __('Asset Info North'); ?></th>
		<th><?php echo __('Asset Info South'); ?></th>
		<th><?php echo __('Asset Info East'); ?></th>
		<th><?php echo __('Asset Info West'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Sub District Id'); ?></th>
		<th><?php echo __('Utilization Id'); ?></th>
		<th><?php echo __('Religious Place Id'); ?></th>
		<th><?php echo __('Asset Info Cost Estimate'); ?></th>
		<th><?php echo __('Asset Area'); ?></th>
		<th><?php echo __('Asset Info Rai'); ?></th>
		<th><?php echo __('Asset Info Ngan'); ?></th>
		<th><?php echo __('Asset Info Square Wah'); ?></th>
		<th><?php echo __('Asset Info Gps Coordinate'); ?></th>
		<th><?php echo __('Asset Info Remark'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subDistrict['AssetInformation'] as $assetInformation): ?>
		<tr>
			<td><?php echo $assetInformation['id']; ?></td>
			<td><?php echo $assetInformation['asset_info_name']; ?></td>
			<td><?php echo $assetInformation['asset_info_title_deed_no']; ?></td>
			<td><?php echo $assetInformation['asset_info_mapsheet_no']; ?></td>
			<td><?php echo $assetInformation['asset_info_parcel_no']; ?></td>
			<td><?php echo $assetInformation['asset_info_dealing_file_no']; ?></td>
			<td><?php echo $assetInformation['asset_info_Boundary']; ?></td>
			<td><?php echo $assetInformation['asset_info_north']; ?></td>
			<td><?php echo $assetInformation['asset_info_south']; ?></td>
			<td><?php echo $assetInformation['asset_info_east']; ?></td>
			<td><?php echo $assetInformation['asset_info_west']; ?></td>
			<td><?php echo $assetInformation['province_id']; ?></td>
			<td><?php echo $assetInformation['district_id']; ?></td>
			<td><?php echo $assetInformation['sub_district_id']; ?></td>
			<td><?php echo $assetInformation['utilization_id']; ?></td>
			<td><?php echo $assetInformation['religious_place_id']; ?></td>
			<td><?php echo $assetInformation['asset_info_cost_estimate']; ?></td>
			<td><?php echo $assetInformation['asset_area']; ?></td>
			<td><?php echo $assetInformation['asset_info_rai']; ?></td>
			<td><?php echo $assetInformation['asset_info_ngan']; ?></td>
			<td><?php echo $assetInformation['asset_info_square_wah']; ?></td>
			<td><?php echo $assetInformation['asset_info_gps_coordinate']; ?></td>
			<td><?php echo $assetInformation['asset_info_remark']; ?></td>
			<td><?php echo $assetInformation['created_by']; ?></td>
			<td><?php echo $assetInformation['created']; ?></td>
			<td><?php echo $assetInformation['modified_by']; ?></td>
			<td><?php echo $assetInformation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asset_informations', 'action' => 'view', $assetInformation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asset_informations', 'action' => 'edit', $assetInformation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asset_informations', 'action' => 'delete', $assetInformation['id']), array(), __('Are you sure you want to delete # %s?', $assetInformation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
