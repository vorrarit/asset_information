<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; รายงานทรัพย์สิน</h5>
    </div>
</div>
    <div class="col-md-12">
        <h3 class="page-header actives" style="margin-top: 20px;">รายงานทรัพย์สิน(ทั่วไป)</h3>
    </div>

<div class="assetInformations form-horizontal">
    <?php echo $this->Form->create('AssetInformation', array('action' => 'check_report')); ?>
    <div class="panel panel-default">
        <div class="panel panel-body" style="box-shadow:none; padding-bottom: 0px;" >
            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label right">ประเภทการค้นหา : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('report_type', array(
                        'label' => FALSE,
                        'options' => array('general' => 'ทั่วไป', 'detail' => 'ผู้บริหาร'),
                        'onchange' => 'check_search()'));
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label right">ชื่อศาสนสมบัติ : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_name', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
                <div class="col-lg-2">
                    <label class="control-label right">เลขที่โฉนด : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_title_deed_no', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label right">ระวาง : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_mapsheet_no', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
                <div class="col-lg-2">
                    <label class="control-label right">เลขที่ดิน : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_parcel_no', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label right">หน้าสำรวจ : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_dealing_file_no', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
                <div class="col-lg-2">
                    <label class="control-label right">เขตติดต่อ : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_Boundary', array(
                        'maxlength' => '50',
                        'label' => FALSE));
                    ?>
                </div>
            </div>

            <div id="embed_div"  hidden="true" class="check_search_type" >
                <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label right">ทิศเหนือ : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('asset_info_north', array(
                            'label' => FALSE));
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label class="control-label right">ทิศใต้ : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('asset_info_south', array(
                            'label' => FALSE));
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label right">ทิศตะวันออก : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('asset_info_east', array(
                            'label' => FALSE));
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label class="control-label right">ทิศตะวันตก : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('asset_info_west', array(
                            'label' => FALSE));
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label right">จังหวัด : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('province_id', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก',
                        'onchange' => 'province_Changed()',));
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label class="control-label right">เขต/อำเภอ : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('district_id', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก',
                        'onchange' => 'district_Changed()'));
                        ?>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label right">แขวง/ตำบล : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('sub_district_id', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก'
                            ));
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label class="control-label right">การใช้ประโยชน์ : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('utilization_id', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก',
                        'onchange' => 'district_Changed()'));
                        ?>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-lg-2">
                        <label class="control-label right">ศาสนสถาน : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('religious_place_id', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก'))
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label class="control-label right">ราคาประเมิน : </label>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        echo $this->Form->input('asset_info_cost_estimate', array(
                        'label' => FALSE,
                        'empty' => 'กรุณาเลือก'))
                        ?>
                    </div>
                <label class="control-label">&nbsp;&nbsp;บาทต่อตารางวา</label>
            </div>

            
            <div class ="row">
            <div class="col-md-2">
                <label class="control-label right">เนื้อที่ :</label>
            </div>
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_rai',array('onkeypress'=>'validate(event)','label'=> FALSE ,'maxlength'=>'4'));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;ไร่ &nbsp;&nbsp;</label>
            </div>
            
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_ngan',array('onkeypress'=>'validate(event)','label'=> FALSE ,'maxlength'=>'2'));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;งาน &nbsp;&nbsp;</label>
            </div>
            
            <div class="col-md-1">
                <?php echo $this->Form->input('asset_info_square_wah',array('onkeypress'=>'validate(event)','label'=> FALSE ,'maxlength'=>'4'));?>
            </div>
            <div>
                <label class="control-label left">&nbsp;&nbsp;ตารางวา &nbsp;&nbsp;</label>
            </div>
            
        </div>
            <div class="row">
                <div class="col-lg-2"></div>
                    <?php echo $this->Form->button(__('แสดงรายงาน'), array('type' => 'submit', 'class' => 'btn btn-primary btn-form')); ?>
                    &nbsp;&nbsp;
                        <?php echo $this->Form->button(__('ยกเลิก'), array('onclick' => "window.location.href='../AssetInformations/index'", 'type' => 'button', 'class' => 'btn btn-default btn-form')); ?>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    
    function check_search() {
        var type = document.getElementById('AssetInformationReportType').value;
        if (type == 'detail') {
            $('.check_search_type').show("fast");
            $('.actives').text('รายงานทรัพย์สิน(ผู้บริหาร)');

        } else {
            $('.check_search_type').hide("fast");
            $('.actives').text('รายงานทรัพย์สิน(ทั่วไป)');
        }
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
