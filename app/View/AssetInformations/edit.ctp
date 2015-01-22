<ol class="breadcrumb">
  <li><a href="../index">จัดการทรัพย์สิน</a></li>
  <li class="active">แก้ไขข้อมูลทรัพย์สิน</li>
</ol>


<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">แก้ไขข้อมูลทรัพย์สิน</a></li>
        <li role="presentation"><a href="/FileDocuments/index/<?php echo $this->data['AssetInformation']['id']; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation"><a href="/Photos/index/<?php echo $this->data['AssetInformation']['id']; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation"><a href="/FileMaps/index/<?php echo $this->data['AssetInformation']['id']; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>

<div class="assetInformations form">
<?php echo $this->Form->create('AssetInformation'); ?>
    <fieldset>
        <?php echo $this->Form->input('id',array('type'=>'hidden','value'=>$id));?>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_name',array('label'=>'ชื่อศาสนสมบัติ' , 'required'=>true ,'maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
	</div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_title_deed_no',array('label'=>'เลขที่โฉนด', 'required'=>true,'maxlength'=>'6','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_mapsheet_no',array('label'=>'ระวาง' ,'maxlength'=>'30' ,'div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_parcel_no',array('label'=>'เลขที่ดิน','maxlength'=>'10','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_dealing_file_no',array('label'=>'หน้าสำรวจ','maxlength'=>'6','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_boundary',array('label'=>'เขตติดต่อ','maxlength'=>'30','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_north',array('label'=>'ทิศเหนือ','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_south',array('label'=>'ทิศใต้','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_east',array('label'=>'ทิศตะวันออก','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_west',array('label'=>'ทิศตะวันตก','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('province_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'province_Changed()',
                    'label'=> 'จังหวัด',
                    'required'=>true,
                    'div'=>array('class'=>'col-lg-6 form-group')
                    ));
            ?>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'district_Changed()',
                    'label'=> 'เขต/อำเภอ',
                    'required'=>true,
                    'div'=>array('class'=>'col-lg-6 form-group')
                    ));
            ?>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('sub_district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> 'แขวง/ตำบล',
                    'required'=>true,
                    'div'=>array('class'=>'col-lg-6 form-group')
                    ));
            ?>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('utilization_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> 'การใช้ประโยชน์',
                    'required'=>true,
                    'div'=>array('class'=>'col-lg-6 form-group')
                    ));
            ?>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('religious_place_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> 'ศาสนสถาน',
                    'required'=>true,
                    'div'=>array('class'=>'col-lg-6 form-group')
                    ));
            ?>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_cost_estimate',array('onkeypress'=>'validate(event)','label'=>'ราคาประเมิน' ,'div'=>array('class'=>'col-lg-4 form-group')));?>
            <label style="margin-top: 30px">บาทต่อตารางวา</label>
            <label style="margin-left: 48px"><a href = 'http://property.treasury.go.th/pvmwebsite/' target='_blank''><span class='glyphicon glyphicon-hand-right'>  ตรวจสอบราคาประเมิน</a></span></label>
            
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_rai',array('onkeypress'=>'validate(event)','label'=>'ไร่' ,'maxlength'=>'4','div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_ngan',array('onkeypress'=>'validate(event)','label'=>'งาน','maxlength'=>'2','div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_square_wah',array('onkeypress'=>'validate(event)','label'=>'ตารางวา','maxlength'=>'4','div'=>array('class'=>'col-lg-2 form-group')));?>
            
        </div>
        
        <div class ="row">
            <?php echo $this->Form->input('asset_info_gps_coordinate',array('onkeypress'=>'validate(event)','label'=>'พิกัด GPS','maxlength'=>'30','div'=>array('class'=>'col-lg-6 form-group'))); ?>
        </div>
        
        <div class ="row">
            <?php echo $this->Form->input('asset_info_remark',array('label'=>'หมายเหตุ','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        
        <?php echo $this->Form->input('created_by',array('type'=>'hidden'));?>
        <?php echo $this->Form->input('modified_by',array('type'=>'hidden'));?>
        

    </fieldset>
    <?php echo $this->Form->button(__('บันทึก'),array('type'=>'submit','class'=>'btn btn-primary btn-form')); ?>
    <?php echo $this->Form->postLink(__('ลบข้อมูล'),array('action'=>'delete', $this->data['AssetInformation']['id']), array('inline'=>false, 'class'=>'btn btn-default'), __('Are you sure you want to delete # %s?', $this->data['AssetInformation']['id']));?>
    <?php echo $this->Form->button(__('ยกเลิก'),array('onclick'=>"window.location.href='/AssetInformations/index'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
    
    <?php echo $this->Form->end(); ?>
    <?php echo $this->fetch('postLink'); ?>
  </div>

<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[\b]|[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
//    document.forms[0].elements['data[AssetInformation][district_id]'].options.length = 1;
//    document.forms[0].elements['data[AssetInformation][sub_district_id]'].options.length = 1;
    
    function province_Changed(){
        var pvID = document.getElementById('AssetInformationProvinceId').value;
            $.post('/AssetInformations/load_Districts/'+pvID+'.json',function(data){
            var ddlDistricts = document.forms[0].elements['data[AssetInformation][district_id]'];
            var ddlSubDistricts = document.forms[0].elements['data[AssetInformation][sub_district_id]'];
            
            ddlDistricts.selectedIndex = 0;
            ddlDistricts.options.length = 1;
            ddlSubDistricts.options.length = 1;
            
        ddlDistricts.options.length = data.result.Districts.length + 1;
            for (i=0; i<data.result.Districts.length; i++) {
                ddlDistricts.options[i+1].text = data.result.Districts[i].District.district_name;
                ddlDistricts.options[i+1].value = data.result.Districts[i].District.id;
            }
        });
    }
    function district_Changed(){
        var dtID = document.getElementById('AssetInformationDistrictId').value;
        $.post('/AssetInformations/load_SubDistricts/'+dtID+'.json',function(data){    
        var ddlSub_Districts = document.forms[0].elements['data[AssetInformation][sub_district_id]'];
        
        ddlSub_Districts.options.length = data.result.SubDistrict.length + 1;
        
            for (i=0; i<data.result.SubDistrict.length; i++) {
                ddlSub_Districts.options[i+1].text = data.result.SubDistrict[i].SubDistrict.sub_district_name;
                ddlSub_Districts.options[i+1].value = data.result.SubDistrict[i].SubDistrict.id;
            }
        });
    }
</script>
