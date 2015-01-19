<div class="provinces view">
<h2><?php echo __('Province'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($province['Province']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province Name'); ?></dt>
		<dd>
			<?php echo h($province['Province']['province_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($province['Province']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($province['Province']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($province['Province']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($province['Province']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province'), array('action' => 'edit', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Province'), array('action' => 'delete', $province['Province']['id']), array(), __('Are you sure you want to delete # %s?', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Informations'), array('controller' => 'asset_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Information'), array('controller' => 'asset_informations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Districts'), array('controller' => 'sub_districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub District'), array('controller' => 'sub_districts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Informations'); ?></h3>
	<?php if (!empty($province['AssetInformation'])): ?>
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
	<?php foreach ($province['AssetInformation'] as $assetInformation): ?>
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
<div class="related">
	<h3><?php echo __('Related Districts'); ?></h3>
	<?php if (!empty($province['District'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('District Name'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($province['District'] as $district): ?>
		<tr>
			<td><?php echo $district['id']; ?></td>
			<td><?php echo $district['district_name']; ?></td>
			<td><?php echo $district['province_id']; ?></td>
			<td><?php echo $district['created_by']; ?></td>
			<td><?php echo $district['created']; ?></td>
			<td><?php echo $district['modified_by']; ?></td>
			<td><?php echo $district['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'districts', 'action' => 'view', $district['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'districts', 'action' => 'edit', $district['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'districts', 'action' => 'delete', $district['id']), array(), __('Are you sure you want to delete # %s?', $district['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sub Districts'); ?></h3>
	<?php if (!empty($province['SubDistrict'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sub District Name'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($province['SubDistrict'] as $subDistrict): ?>
		<tr>
			<td><?php echo $subDistrict['id']; ?></td>
			<td><?php echo $subDistrict['sub_district_name']; ?></td>
			<td><?php echo $subDistrict['province_id']; ?></td>
			<td><?php echo $subDistrict['district_id']; ?></td>
			<td><?php echo $subDistrict['created_by']; ?></td>
			<td><?php echo $subDistrict['created']; ?></td>
			<td><?php echo $subDistrict['modified_by']; ?></td>
			<td><?php echo $subDistrict['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sub_districts', 'action' => 'view', $subDistrict['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sub_districts', 'action' => 'edit', $subDistrict['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sub_districts', 'action' => 'delete', $subDistrict['id']), array(), __('Are you sure you want to delete # %s?', $subDistrict['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sub District'), array('controller' => 'sub_districts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
