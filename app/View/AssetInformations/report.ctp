<ol class="breadcrumb">
  <li><a href="/AssetInformations/index">จัดการทรัพย์สิน</a></li>
  <li class="active" id ="site" value="รายงานทรัพย์สิน(ทั่วไป)">รายงานทรัพย์สิน(ทั่วไป)</li>
</ol>
<div class="assetInformations form">
    <?php echo $this->Form->create('AssetInformation',array('action'=>'check_report')); ?>
    <div class="form-group">
        <div class ="row">
            <?php
            echo $this->Form->input('report_type', array(
                    'onchange'=>'mode()',
                    'options'=>array('ทั่วไป','ผู้บริหาร'),
                    'label'=> 'ประเภทรายงาน',
                    'div'=>array('class'=>'col-lg-4 form-group')
                    ));
            ?>
            
            <div class="checkbox-inline" style="margin-top: 30px">
                <label>
                    <input type="checkbox" name="checkbox">แสดงรายงานทั้งหมด
                </label>
            </div>
         </div>
         <div class ="row">
            <?php echo $this->Form->input('asset_info_name',array('label'=>'ชื่อศาสนสมบัติ' , 'maxlength'=>'50','div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_title_deed_no',array('label'=>'เลขที่โฉนด', 'maxlength'=>'6','div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        <div id="embed">
        <div class ="row">
            <?php echo $this->Form->input('asset_info_mapsheet_no',array('label'=>'ระวาง' ,'maxlength'=>'30' ,'div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_parcel_no',array('label'=>'เลขที่ดิน','maxlength'=>'10','div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        </div>
         <div class ="row">
            <?php echo $this->Form->input('asset_info_dealing_file_no',array('label'=>'หน้าสำรวจ','maxlength'=>'6','div'=>array('class'=>'col-lg-4 form-group')));?>
             <div id="embed3" style="display: none">
                <?php echo $this->Form->input('asset_info_cost_estimate',array('onkeypress'=>'validate(event)','label'=>'ราคาประเมิน' ,'div'=>array('class'=>'col-lg-4 form-group')));?>
                <label style="margin-top: 30px">บาทต่อตารางวา</label>
             </div>
             <div id="embed4">
                <?php echo $this->Form->input('asset_info_Boundary',array('label'=>'เขตติดต่อ','maxlength'=>'30','div'=>array('class'=>'col-lg-4 form-group')));?>
             </div>
             </div>
        <div id="embed2" >
        <div class ="row">
            <?php echo $this->Form->input('asset_info_north',array('label'=>'ทิศเหนือ','maxlength'=>'50','div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_south',array('label'=>'ทิศใต้','maxlength'=>'50','div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
           <div class ="row">
            <?php echo $this->Form->input('asset_info_east',array('label'=>'ทิศตะวันออก','maxlength'=>'50','div'=>array('class'=>'col-lg-4 form-group')));?>
            <?php echo $this->Form->input('asset_info_west',array('label'=>'ทิศตะวันตก','maxlength'=>'50','div'=>array('class'=>'col-lg-4 form-group')));?>
        </div>
        </div>
        <div class ="row">
            <?php
            echo $this->Form->input('province_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'province_Changed()',
                    'label'=> 'จังหวัด',
                    'div'=>array('class'=>'col-lg-4 form-group')
                    ));

            echo $this->Form->input('district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'district_Changed()',
                    'label'=> 'เขต/อำเภอ',
                    'div'=>array('class'=>'col-lg-4 form-group')
                    ));
            ?>
          </div>
          <div class ="row">
            <?php  
            echo $this->Form->input('sub_district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> 'แขวง/ตำบล',
                    'div'=>array('class'=>'col-lg-4 form-group')
                    ));

            echo $this->Form->input('religious_place_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> 'ศาสนสถาน',
                    'div'=>array('class'=>'col-lg-4 form-group')
                    ));
            ?>
        </div> 
        <div id="embed5">
        <div class ="row">
            <?php echo $this->Form->input('asset_info_cost_estimate',array('onkeypress'=>'validate(event)','label'=>'ราคาประเมิน' ,'div'=>array('class'=>'col-lg-4 form-group')));?>
            <label style="margin-top: 30px">บาทต่อตารางวา</label>
        </div>
        </div>
        <div class ="row">
            <?php echo $this->Form->input('asset_info_rai',array('onkeypress'=>'validate(event)','label'=>'ไร่' ,'maxlength'=>'4','div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_ngan',array('onkeypress'=>'validate(event)','label'=>'งาน','maxlength'=>'2','div'=>array('class'=>'col-lg-2 form-group')));?>
            <?php echo $this->Form->input('asset_info_square_wah',array('onkeypress'=>'validate(event)','label'=>'ตารางวา','maxlength'=>'4','div'=>array('class'=>'col-lg-2 form-group')));?>
        </div>
        
    </div>
    <?php echo $this->Form->button(__('แสดงรายงาน'),array('type'=>'submit','class'=>'btn btn-primary btn-form')); ?>
    <?php echo $this->Form->button(__('ยกเลิก'),array('onclick'=>"window.location.href='/AssetInformations/index'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
    <?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
    function mode(){
        if($('#AssetInformationReportType').val() == 0){general();}
        else{manager();}
    }
    function general(){
        $("#site").html('รายงานทรัพย์สิน(ทั่วไป)');
        $("#embed").show("fast");
        $("#embed2").show("fast");
        $("#embed3").hide("fast");
        $("#embed4").show("fast");
        $("#embed5").show("fast");
        
    }
    function manager(){
        $("#site").html('รายงานทรัพย์สิน(ผู้บริหาร)');
        $("#embed").hide("fast");
        $("#embed2").hide("fast");
        $("#embed3").show("fast");
        $("#embed4").hide("fast");
        $("#embed5").hide("fast"); 
    }
    
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    
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
