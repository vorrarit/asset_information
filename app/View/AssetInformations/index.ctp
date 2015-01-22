<ol class="breadcrumb">
  <li><a href="../index">จัดการทรัพย์สิน</a></li>
  <li><a href="../view">ข้อมูลทรัพย์สิน</a></li>
  <li class="active">ค้นหาข้อมูลทรัพย์สินแบบทั่วไป</li>
</ol>
<div class="assetInformations form">
    <?php echo $this->Form->create('AssetInformation',array('action'=>'index')); ?>
    <div class="form-group">
        <div class ="row">
            <?php
            echo $this->Form->input('search_type',array(
			'label'=> 'ประเภทการค้นหา',
			'options'=> array('general'=>'ทั่วไป','detail'=>'รายละเอียด'),
			'div'=>array('class'=>'col-lg-4 form-group'),
			'onchange'=>'check_search()'));
            ?>

            <div class="checkbox-inline" style="margin-top: 30px">
                <?php
				echo $this->Form->checkbox('search_all', array(
				'label'=> 'ค้นหาทั้งหมด'));
				echo "ค้นหาทั้งหมด";
				?>
            </div>
        </div>
		<div class ="row">
            <?php echo $this->Form->input('asset_info_name', array(
			'maxlength'=>'50',
			'label'=> 'ชื่อศาสนะสมบัติ ',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_title_deed_no', array(
			'maxlength'=>'50',
			'label'=> 'เลขที่โฉนด',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_mapsheet_no', array(
			'maxlength'=>'50',
			'label'=> 'ระวาง',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_parcel_no', array(
			'maxlength'=>'50',
			'label'=> 'เลขที่ดิน',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_dealing_file_no', array(
			'maxlength'=>'50',
			'label'=> 'หน้าสำรวจ',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_Boundary', array(
			'maxlength'=>'50',
			'label'=> 'เขตติดต่อ',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        
            <div id="embed_div"  hidden="true" class="check_search_type" >
				<div class ="row" >
			<?php echo $this->Form->input('asset_info_north', array(
			'label'=> 'ทิศเหนือ',
			'maxlength'=>'50',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_south', array(
			'label'=> 'ทิศใต้',
			'maxlength'=>'50', 
			'div'=>array('class'=>'col-lg-4 form-group')));?>	
				</div>
				<div class ="row" >
            <?php echo $this->Form->input('asset_info_east', array(
			'label'=> 'ทิศตะวันออก',
				'maxlength'=>'50',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_west', array(
				'maxlength'=>'50',
			'label'=> 'ทิศตะวันตก',
			'div'=>array('class'=>'col-lg-4 form-group')));?>
				</div>
			</div>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('province_id', array(
					'label'=> 'จังหวัด',
					'empty'=>'Please Select',
					'onchange'=>'province_Changed()',
					'div'=>array('class'=>'col-lg-4 form-group')));
            echo $this->Form->input('district_id', array(
					'label'=> 'เขต/อำเภอ',
					'empty'=>'Please Select',
					'onchange'=>'district_Changed()',
					'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
          </div>
          <div class ="row">
            <?php  
            echo $this->Form->input('sub_district_id', array(
					'label'=> 'แขวง/ตำบล',
					'empty'=>'Please Select',
					'div'=>array('class'=>'col-lg-4 form-group')));

            echo $this->Form->input('utilization_id',array(
					'label'=> 'การใช้ประยชน์',
					'empty'=>'Please Select',
					'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div> 
		<div class ="row">
			<?php  
				echo $this->Form->input('religious_place_id',array(
					'label'=> 'ศาสนสถาน',
					'empty'=>'Please Select',
					'div'=>array('class'=>'col-lg-4 form-group')));
				echo $this->Form->input('asset_info_cost_estimate', array(
					'label'=> 'ราคาประเมิน',
					'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
		</div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_cost_estimate', array(
					'maxlength'=>'50',
					'label'=> 'ราคาประเมิน',
					'div'=>array('class'=>'col-lg-4 form-group')));?>
            <label style="margin-top: 30px">บาทต่อตารางวา</label>
        </div>
        <div class ="row">
			<?php echo $this->Form->input('asset_info_rai', array(
					'maxlength'=>'50',
					'label'=> 'ไร่',
					'maxlength'=>'4',
					'div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_ngan', array(
					'maxlength'=>'50',
					'label'=> 'งาน',
					'maxlength'=>'4',
					'div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_square_wah', array(
					'maxlength'=>'50',
					'label'=> 'ตารางวา',
					'maxlength'=>'4',
					'div'=>array('class'=>'col-lg-2 form-group')));?>
        </div>
				<div class="col-lg-12 form-group">
		<?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span>&nbsp;' . __('ค้นหา'),array('type'=>'submit', 'class'=>'btn btn-primary btn-form')); ?>
		<?php echo $this->Form->button(__('ยกเลิก'), array('onclick'=>"window.location.href='../AssetInformations/index'",'type'=>'button', 'class'=>'btn btn-default btn-form')); ?>
				</div>
			</div>
<?php echo $this->Form->end(); ?>
			<div class="assetInformations index">
				<h1><?php echo __('ผลการค้นหา'); ?></h1>
				<table cellpadding="0" cellspacing="0" width = "100%" class="table">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id','ลำดับ'); ?></th>
							<th><?php echo $this->Paginator->sort('asset_info_name','รายชื่อ ศบ/วัดร้าง'); ?></th>
							<th><?php echo $this->Paginator->sort('sub_district_id','แขวง'); ?></th>
							<th><?php echo $this->Paginator->sort('district_id','เขต'); ?></th>
							<th><?php echo $this->Paginator->sort('province_id','จังหวัด'); ?></th>
							<th><?php echo $this->Paginator->sort('asset_info_title_deed_no','โฉนดเลขที่'); ?></th>
							<th><?php echo $this->Paginator->sort('asset_area','เนื้อที่'); ?></th>
							<th class="actions"><?php echo __('เอกสาร'); ?></th></tr>
					</thead>
					<tbody>
	<?php foreach ($assetInformations as $assetInformation): ?>
						<tr>
							<td><?php echo h($assetInformation['AssetInformation']['id']); ?>&nbsp;</td>
							<td><?php echo h($assetInformation['AssetInformation']['asset_info_name']); ?>&nbsp;</td>
							<td>
			<?php echo h($assetInformation['SubDistrict']['sub_district_name']); ?>&nbsp;
							</td>
							<td>
			<?php echo h($assetInformation['District']['district_name']); ?>&nbsp;
							</td>
							<td>
			<?php echo h($assetInformation['Province']['province_name']); ?>&nbsp;
							</td>
							<td>
			<?php echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']); ?>&nbsp;
							</td>
							<td><?php echo h($assetInformation['AssetInformation']['asset_info_rai'].'-'.$assetInformation['AssetInformation']['asset_info_ngan'].'-'.$assetInformation['AssetInformation']['asset_info_square_wah']); ?>&nbsp;</td>
							<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $assetInformation['AssetInformation']['id']), array('title'=>__('Edit'), 'escape'=>false)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $assetInformation['AssetInformation']['id']), array('title'=>__('View'), 'escape'=>false)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $assetInformation['AssetInformation']['id']), array('title'=>__('Delete'), 'escape'=>false,__('Are you sure you want to delete # %s?', $assetInformation['AssetInformation']['id']))); ?>
							
							</td>
						</tr>
			<?php endforeach; ?>
				</table>

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
			<script language="JavaScript">

				function province_Changed() {
					var provinceID = document.getElementById('AssetInformationProvinceId').value;
					$.post('/AssetInformations/loadDistricts/' + provinceID + '.json', function (data) {
						var ddlDistricts = document.forms[0].elements['data[AssetInformation][district_id]'];
						var ddlSubDistricts = document.forms[0].elements['data[AssetInformation][sub_district_id]'];
						ddlDistricts.selectedIndex = 0;
						ddlDistricts.options.length = 1;
						ddlSubDistricts.options.length = 1;
						ddlDistricts.options.length = data.result.Districts.length + 1;
						for (i = 0; i < data.result.Districts.length; i++) {
							ddlDistricts.options[i + 1].text = data.result.Districts[i].District.district_name;
							ddlDistricts.options[i + 1].value = data.result.Districts[i].District.id;
						}
					});
				}
				function district_Changed() {
					var districtID = document.getElementById('AssetInformationDistrictId').value;
					$.post('/AssetInformations/loadSubDistricts/' + districtID + '.json', function (data) {
						var ddlSubDistricts = document.forms[0].elements['data[AssetInformation][sub_district_id]'];
						ddlSubDistricts.options.length = data.result.SubDistricts.length + 1;
						for (i = 0; i < data.result.SubDistricts.length; i++) {
							ddlSubDistricts.options[i + 1].text = data.result.SubDistricts[i].SubDistrict.sub_district_name;
							ddlSubDistricts.options[i + 1].value = data.result.SubDistricts[i].SubDistrict.id;
						}
					});
				}
				function check_search() {
					var search_type = document.getElementById('AssetInformationSearchType').value;
					if (search_type == 'detail') {
						$('.check_search_type').show("fast");
						$('.active').text('ค้นหาข้อมูลทรัพย์สินแบบละเอียด');
						
					} else {
						$('.check_search_type').hide("fast");
						$('.active').text('ค้นหาข้อมูลทรัพย์สินแบบทั่วไป');
					}
					
				}
				function clearList()
				{
					
				}
			</script>





