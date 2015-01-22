<div class="assetInformations view">
<h2><?php echo __('Asset Information'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Name'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Title Deed No'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Mapsheet No'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_mapsheet_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Parcel No'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_parcel_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Dealing File No'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Boundary'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_boundary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info North'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_north']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info South'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_south']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info East'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_east']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info West'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_west']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetInformation['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $assetInformation['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetInformation['District']['id'], array('controller' => 'districts', 'action' => 'view', $assetInformation['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetInformation['SubDistrict']['id'], array('controller' => 'sub_districts', 'action' => 'view', $assetInformation['SubDistrict']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utilization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetInformation['Utilization']['id'], array('controller' => 'utilizations', 'action' => 'view', $assetInformation['Utilization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religious Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetInformation['ReligiousPlace']['id'], array('controller' => 'religious_places', 'action' => 'view', $assetInformation['ReligiousPlace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Cost Estimate'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_cost_estimate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Area'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Rai'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_rai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Ngan'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_ngan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Square Wah'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_square_wah']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Gps Coordinate'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_gps_coordinate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Info Remark'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['asset_info_remark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($assetInformation['AssetInformation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related File Documents'); ?></h3>
	<?php if (!empty($assetInformation['FileDocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asset Information Id'); ?></th>
		<th><?php echo __('File Doc Name'); ?></th>
		<th><?php echo __('File Doc Path'); ?></th>
		<th><?php echo __('File Doc File Type'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetInformation['FileDocument'] as $fileDocument): ?>
		<tr>
			<td><?php echo $fileDocument['id']; ?></td>
			<td><?php echo $fileDocument['asset_information_id']; ?></td>
			<td><?php echo $fileDocument['file_doc_name']; ?></td>
			<td><?php echo $fileDocument['file_doc_path']; ?></td>
			<td><?php echo $fileDocument['file_doc_file_type']; ?></td>
			<td><?php echo $fileDocument['created_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'file_documents', 'action' => 'view', $fileDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'file_documents', 'action' => 'edit', $fileDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'file_documents', 'action' => 'delete', $fileDocument['id']), array(), __('Are you sure you want to delete # %s?', $fileDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related File Maps'); ?></h3>
	<?php if (!empty($assetInformation['FileMap'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Asset Information Id'); ?></th>
		<th><?php echo __('File Map Name'); ?></th>
		<th><?php echo __('File Map Path'); ?></th>
		<th><?php echo __('File Map File Type'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetInformation['FileMap'] as $fileMap): ?>
		<tr>
			<td><?php echo $fileMap['id']; ?></td>
			<td><?php echo $fileMap['asset_information_id']; ?></td>
			<td><?php echo $fileMap['file_map_name']; ?></td>
			<td><?php echo $fileMap['file_map_path']; ?></td>
			<td><?php echo $fileMap['file_map_file_type']; ?></td>
			<td><?php echo $fileMap['created_by']; ?></td>
			<td><?php echo $fileMap['created']; ?></td>
			<td><?php echo $fileMap['modified_by']; ?></td>
			<td><?php echo $fileMap['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'file_maps', 'action' => 'view', $fileMap['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'file_maps', 'action' => 'edit', $fileMap['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'file_maps', 'action' => 'delete', $fileMap['id']), array(), __('Are you sure you want to delete # %s?', $fileMap['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New File Map'), array('controller' => 'file_maps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($assetInformation['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Photo Name'); ?></th>
		<th><?php echo __('Photo Path'); ?></th>
		<th><?php echo __('Photo File Type'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Asset Information Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetInformation['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['photo_name']; ?></td>
			<td><?php echo $photo['photo_path']; ?></td>
			<td><?php echo $photo['photo_file_type']; ?></td>
			<td><?php echo $photo['created_by']; ?></td>
			<td><?php echo $photo['created']; ?></td>
			<td><?php echo $photo['modified_by']; ?></td>
			<td><?php echo $photo['modified']; ?></td>
			<td><?php echo $photo['asset_information_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), array(), __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
