<ol class="breadcrumb">
  <li><a href="../index">จัดการทรัพย์สิน</a></li>
  <li class="active">รายละเอียดข้อมูลทรัพย์สิน</li>
</ol>


<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a>รายละเอียด</a></li>
        <li role="presentation"><a href="/FileDocuments/index/<?php echo $assetID ?>">สำเนาโฉนดที่ดิน</a></li>
        <li role="presentation"><a href="/Photos/index/<?php echo $assetID  ?>">ภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileMaps/index/<?php echo $assetID  ?>">เอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>

<h3><?php echo __('รายละเอียด'); ?></h3>
<div class="assetInformations form">
    <?php echo $this->Form->create('AssetInformation'); ?>
    <fieldset>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ชื่อศาสนสมบัติ' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'เลขที่โฉนด',
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_title_deed_no'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ระวาง' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_mapsheet_no'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'เลขที่ดิน',
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_parcel_no'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'หน้าสำรวจ' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_dealing_file_no'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'เขตติดต่อ',
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_boundary'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ทิศเหนือ' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_north'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ทิศใต้',
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_south'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ทิศตะวันออก' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_east'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ทิศตะวันตก',
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_west'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'จังหวัด' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['Province']['province_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'เขต/อำเภอ',
                        'disabled'=>true,
                        'value'=> $assetInformation['District']['district_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'แขวง/ตำบล' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['SubDistrict']['sub_district_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'การใช้ประโยชน์',
                        'disabled'=>true,
                        'value'=> $assetInformation['Utilization']['utilization_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ศาสนสถาน' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['ReligiousPlace']['religious_place_name'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'ราคาประเมิน' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_cost_estimate'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_rai',
                    array('label'=>'ไร่' ,
                          'value'=> $assetInformation['AssetInformation']['asset_info_rai'],
                          'disabled'=>true,
                          'div'=>array('class'=>'col-lg-2 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_rai',
                    array('label'=>'งาน' ,
                          'value'=> $assetInformation['AssetInformation']['asset_info_ngan'],
                          'disabled'=>true,
                          'div'=>array('class'=>'col-lg-2 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_rai',
                    array('label'=>'ตารางวา' ,
                          'value'=> $assetInformation['AssetInformation']['asset_info_square_wah'],
                          'disabled'=>true,
                          'div'=>array('class'=>'col-lg-2 form-group')));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'พิกัด GPS' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_gps_coordinate'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
            <?php echo $this->Form->input('asset_info_name',
                  array('label'=>'หมายเหตุ' ,
                        'disabled'=>true,
                        'value'=> $assetInformation['AssetInformation']['asset_info_remark'],
                        'div'=>array('class'=>'col-lg-4 form-group')));
            ?>
        </div>
    </fieldset>
    <?php echo $this->Form->end(); ?>

</div>
