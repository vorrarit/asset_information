<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน > ข้อมูลทรัพย์สิน > รายละเอียดทรัพย์สิน</h5>
    </div>
</div>
<div class="products form row">
    <div class="col-lg-12">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a>รายละเอียด</a></li>
        <li role="presentation"><a href="/FileDocuments/view/<?php echo $assetID ?>">สำเนาโฉนดที่ดิน</a></li>
        <li role="presentation"><a href="/Photos/view/<?php echo $assetID  ?>">ภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileMaps/view/<?php echo $assetID  ?>">เอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
    </div>
</div>
<div class="col-md-12">
    <h3 class="page-header">รายละเอียดทรัพย์สิน</h3>
</div>
<br>

<div class="assetInformations form-horizontal">
<?php echo $this->Form->create('AssetInformation'); ?>
    <div class="panel panel-default">
        <div class="panel panel-body" style="box-shadow:none; padding-bottom: 0px;" >
    <fieldset>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ชื่อศาสนสมบัติ : </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_name',array('label'=> FALSE,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_name']
                        ))
                ;?>
            </div>
        </div>
           
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เลขที่โฉนด: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_title_deed_no',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_title_deed_no']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ระวาง: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_mapsheet_no',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_mapsheet_no']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เลขที่ดิน: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_parcel_no',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_parcel_no']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">หน้าสำรวจ: </label>
        </div>
           <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_dealing_file_no',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_dealing_file_no']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เขตติดต่อ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_Boundary',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_Boundary']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศเหนือ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_north',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_north']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศใต้: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_south',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_south']
                        ))
                ;?>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศตะวันออก: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_east',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_east']
                        ))
                ;?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศตะวันตก: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_west',array('label'=> False,
                                              'disabled'=>true,
                                              'value'=> $assetInformation['AssetInformation']['asset_info_west']
                        ))
                ;?>
            </div>
        </div>

        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">จังหวัด: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('asset_info_name', array(
                    'disabled'=>true,
                    'value'=> $assetInformation['Province']['province_name'],
                    'label'=> FALSE
                    ));
            ?>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">เขต/อำเภอ: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('asset_info_name', array(
                    'disabled'=>true,
                    'value'=> $assetInformation['District']['district_name'],
                    'label'=> FALSE
                    ));
            ?>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">แขวง/ตำบล: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('asset_info_name', array(
                    'disabled'=>true,
                    'value'=> $assetInformation['SubDistrict']['sub_district_name'],
                    'label'=> FALSE
                    ));
            ?>
            </div>
        </div>
        
        
        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">การใช้ประโยชน์: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('asset_info_name', array(
                    'disabled'=>true,
                    'value'=> $assetInformation['Utilization']['utilization_name'],
                    'label'=> FALSE
                    ));
            ?>
            </div>
        </div>
        
        
        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">ศาสนสถาน: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('asset_info_name', array(
                    'disabled'=>true,
                    'value'=> $assetInformation['ReligiousPlace']['religious_place_name'],
                    'label'=> FALSE
                    ));
            ?>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-md-2">
                <label class="control-label right">ราคาประเมิน: </label>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('asset_info_cost_estimate', array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=>$assetInformation['AssetInformation']['asset_info_cost_estimate']
                                             ))
                ;?>
            </div>
            <div class="col-md-2">
                <label class="control-label left">บาทต่อตารางวา</label>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-md-2">
                <label class="control-label right">เนื้อที่: </label>
            </div>
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_rai', array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=>$assetInformation['AssetInformation']['asset_info_rai']
                                             ));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;ไร่ &nbsp;&nbsp;</label>
            </div>
            
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_ngan',array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=>$assetInformation['AssetInformation']['asset_info_ngan']
                                             ));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;งาน &nbsp;&nbsp;</label>
            </div>
            
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_square_wah',array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=>$assetInformation['AssetInformation']['asset_info_square_wah']
                                             ));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;ตารางวา &nbsp;&nbsp;</label>
            </div>
        </div>
        
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">พิกัด GPS: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_gps_coordinate',array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=> $assetInformation['AssetInformation']['asset_info_gps_coordinate']
                        ));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">หมายเหตุ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_remark',array(
                                               'label'=> FALSE,
                                               'disabled'=>true,
                                               'value'=> $assetInformation['AssetInformation']['asset_info_remark']
                        ));?>
            </div>
        </div>
        
    </fieldset>
        
     <div class="row">
        <div class="col-lg-2"></div>
        <?php echo $this->Form->button(__('กลับ'),array('onclick'=>"window.location.href='/AssetInformations/index'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
     </div>
     <?php echo $this->Form->end(); ?>
</div>
</div>
</div>