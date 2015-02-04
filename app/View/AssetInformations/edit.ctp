<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน &gt; แก้ไขข้อมูลทรัพย์สิน</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a>แก้ไขข้อมูลทรัพย์สิน</a></li>
            <li role="presentation"><a href="/FileDocuments/index/<?php echo $id; ?>">เพิ่มสำเนาโฉนดที่ดิน</a></li>
            <li role="presentation"><a href="/Photos/index/<?php echo $id; ?>">เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
            <li role="presentation"><a href="/FileMaps/index/<?php echo $id; ?>">เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
        </ul>
    </div>
</div>
<div class="col-md-12">
        <h3 class="page-header">แก้ไขข้อมูลทรัพย์สิน</h3>
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
                <?php echo $this->Form->input('asset_info_name',array('label'=> FALSE , 'required'=>true ,'maxlength'=>'50'));?>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เลขที่โฉนด: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_title_deed_no',array('label'=> False, 'required'=>true,'maxlength'=>'6'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ระวาง: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_mapsheet_no',array('label'=> False, 'required'=>true,'maxlength'=>'30'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เลขที่ดิน: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_parcel_no',array('label'=> False,'maxlength'=>'10'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">หน้าสำรวจ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_dealing_file_no',array('label'=> False,'maxlength'=>'6'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">เขตติดต่อ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_Boundary',array('label'=> False,'maxlength'=>'30'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศเหนือ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_north',array('label'=> False,'maxlength'=>'50'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศใต้: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_south',array('label'=> False,'maxlength'=>'50'));?>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศตะวันออก: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_east',array('label'=> False,'maxlength'=>'50'));?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">ทิศตะวันตก: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_west',array('label'=> False,'maxlength'=>'50'));?>
            </div>
        </div>

        <div class ="row">
            <div class="col-lg-2">
                <label class="control-label right">จังหวัด: </label>
            </div>
            <div class="col-lg-4">
            <?php
            echo $this->Form->input('province_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'province_Changed()',
                    'label'=> FALSE,
                    'required'=>true
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
            echo $this->Form->input('district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'onchange'=>'district_Changed()',
                    'label'=> FALSE,
                    'required'=>true
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
            echo $this->Form->input('sub_district_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> FALSE,
                    'required'=>true
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
            echo $this->Form->input('utilization_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> FALSE,
                    'required'=>true
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
            echo $this->Form->input('religious_place_id', array(
                    'empty'=>'กรุณาเลือก',
                    'label'=> FALSE,
                    'required'=>true
                    ));
            ?>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-md-2">
                <label class="control-label right">ราคาประเมิน: </label>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->input('asset_info_cost_estimate',array('onkeypress'=>'validate(event)','label'=> FALSE));?>
            </div>
            <div class="col-md-2">
                <label class="control-label left">บาทต่อตารางวา</label>
            </div>
            <div class="col-md-3">
                <label class="control-label left"><a href = 'http://property.treasury.go.th/pvmwebsite/' target='_blank''><span class='glyphicon glyphicon-hand-right'>  ตรวจสอบราคาประเมิน</a></span></label>
            </div>
        </div>
        
        <div class ="row">
            <div class="col-md-2">
                <label class="control-label right">เนื้อที่: </label>
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
        <div class="col-lg-2">
          <label class="control-label right">พิกัด GPS: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_gps_coordinate',array('onkeypress'=>'validate(event)','label'=>FALSE,'maxlength'=>'30', 
				'wrap'=>'input-group',
				'afterInput'=>'<span class="input-group-btn" ><button type="button" data-toggle="modal" data-target="#myMapModal" class="btn btn-default" style="padding-bottom: 7px;"><span class="glyphicon glyphicon-globe"></span></button></span>')); ?>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label right">หมายเหตุ: </label>
        </div>
            <div class="col-lg-4">
                <?php echo $this->Form->input('asset_info_remark',array('label'=> False,'maxlength'=>'50'));?>
            </div>
        </div>
        
        
        <?php echo $this->Form->input('created_by',array('type'=>'hidden'));?>
        <?php echo $this->Form->input('modified_by',array('type'=>'hidden'));?>
        
    </fieldset>
     <div class="row">
        <div class="col-lg-2"></div>
        <?php echo $this->Form->button(__('บันทึก'),array('type'=>'submit','class'=>'btn btn-primary btn-form')); ?>
        <?php echo $this->Form->postLink(__('ลบข้อมูล'),array('action'=>'delete', $this->data['AssetInformation']['id']), array('inline'=>false, 'class'=>'btn btn-default'), __('Are you sure you want to delete # %s?', $this->data['AssetInformation']['id']));?>
        <?php echo $this->Form->button(__('ยกเลิก'),array('onclick'=>"window.location.href='/AssetInformations/index'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
     </div>
     <?php echo $this->Form->end(); ?>
     <?php echo $this->fetch('postLink'); ?>
        </div>
    </div>
</div>

<style type="text/css">
	#map-canvas {
		width:568px;
		height:480px;
	}
</style>


<!-- Modal -->
<div class="modal fade" id="myMapModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body">
                <div id="map-canvas" class=""></div>
				<form>
					<div class="row">
						<div class="col-lg-12">
							<div class="input-group">
								<input type="text" id="txtGeoCoderSearch" class="form-control" placeholder="Search for location...">
								<span class="input-group-btn">
									<button class="btn btn-default" style="padding-bottom: 7px;" type="button" id="btnGeoCoderSearch">Go!</button>
								</span>
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div>
				</form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-form" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


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


<script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
<script type="text/javascript">

var map = null;
var marker = new google.maps.Marker();
function initialize() {
	var mapOptions = {
		zoom: 8,
		center: new google.maps.LatLng(-34.397, 150.644),
		disableDoubleClickZoom: true,
		draggable: true,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
	google.maps.event.addListener(map, 'dblclick', function (event) {
		marker.setPosition(event.latLng);
		marker.setMap(map);
		
		$("#AssetInformationAssetInfoGpsCoordinate").val(event.latLng);
		return false;
	});
}

google.maps.event.addDomListener(window, 'load', initialize);

function resizeMap() {
	if (typeof map == "undefined")
		return;
	setTimeout(function () {
		resizingMap();
		}, 400);
}

function resizingMap() {
	if (typeof map == "undefined")
		return;
	var center = map.getCenter();
	google.maps.event.trigger(map, "resize");
	map.setCenter(center);
}

$('#myMapModal').on('show.bs.modal', function (event) {
	resizeMap();
});

$('#btnGeoCoderSearch').click(function() {
	var geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': $('#txtGeoCoderSearch').val() }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			marker.setPosition(results[0].geometry.location);
			marker.setMap(map);
			$("#AssetInformationAssetInfoGpsCoordinate").val(results[0].geometry.location);
		}
	});
});

</script>