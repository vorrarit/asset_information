<div class="row">
	<br>
	<ol class="breadcrumb">
		<li><a href="/AssetInformations">จัดการทรัพย์สิน</a></li>
		<li class="active"><a href="/AssetInformations/edit/<?php echo $assetID; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
		<li class="active">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</li>
	</ol>
</div>

<div class="fileMaps index">
	<div class="products form row">

		<ul class="nav nav-tabs">
			<li role="presentation" onclick="added()"><a href="/AssetInformations/edit/<?php echo $assetID; ?>">แก้ไขข้อมูลทรัพย์สิน</a></li>
			<li role="presentation"  onclick="added()"><a href="/FileDocuments/index/<?php echo $assetID; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
			<li role="presentation" onclick="added()"><a href="/Photos/index/<?php echo $assetID; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
			<li role="presentation" class="active" onclick="added()"><a href="#">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
		</ul>
	</div>
	<div class="wrapper">
		<!--		<div class="container gallery ">
					<ul class="thumbnails ">
		<?php foreach ($fileMaps as $fileMap) { ?>
			<?php if ($fileMap['FileMap']['asset_information_id'] == $assetID) { ?>
						
												<li class="span3"> <a class="thumbnail" rel="lightbox[group]" href=""<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>""><img class="group1" src="<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>" title="Image Title" /></a> </li>
						
			<?php } ?>
				
		<?php } ?>
					</ul>
					end thumbnails  
		
					 /#page-wrapper  
		
				</div>-->
		<div class="connected-carousels">
			<div class="stage">
				<div class="carousel carousel-stage">
					<ul>
						<?php foreach ($fileMaps as $fileMap) { ?>
							<?php if ($fileMap['FileMap']['asset_information_id'] == $assetID) { ?>

								<li><img src="<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>" width="600" height="400" alt=""></li>


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
						<?php foreach ($fileMaps as $fileMap) { ?>
							<?php if ($fileMap['FileMap']['asset_information_id'] == $assetID) { ?>

								<li><img src="<?php echo "/img/filemap/" . $fileMap['FileMap']['file_map_name']; ?>" width="50" height="50" alt=""></li>


							<?php } ?>

						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="btn-group pull-right" role="group" aria-label="...">
			<?php echo $this->Form->button('<span class="glyphicon glyphicon-plus"> เพิ่มข้อมูล</span>', array('onclick' => "window.location.href='/FileMaps/add/$assetID '", 'type' => 'button', 'escape' => false, 'title' => __('เพิ่มข้อมูล'), 'class' => 'btn btn-default')); ?> 
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th><?php echo __('ลำดับ'); ?></th>
					<th><?php echo __('ชื่อไฟล์'); ?></th>
					<th><?php echo __('บันทึกโดย'); ?></th>
					<th><?php echo __('วันที่'); ?></th>


					<th class="actions"><?php echo __('เอกสาร'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($fileMaps as $fileMap): ?>
					<tr>
						<td><?php echo h($fileMap['FileMap']['id']); ?>&nbsp;</td>
						<td><?php echo h($fileMap['FileMap']['file_map_name']); ?>&nbsp;</td>
						<td><?php echo h($fileMap['FileMap']['created_by']); ?>&nbsp;</td>
						<td><?php echo h($fileMap['FileMap']['created']); ?>&nbsp;</td>


						<td class="actions">
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"> ลบข้อมูล</span>', array('action' => 'delete', $fileMap['FileMap']['id']), array('escape' => false, 'title' => __('Delete')), __('Are you sure you want to delete # %s?', $fileMap['FileMap']['id'])); ?>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<script>
			$(document).ready(function () {
				$("[rel^='lightbox']").prettyPhoto();
			});
        </script>
	</div>
