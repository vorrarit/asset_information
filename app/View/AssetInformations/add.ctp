<br>
<div class="row">
<ol class="breadcrumb">
  <li><a href="index">จัดการทรัพย์สิน</a></li>
  <li class="active">เพิ่มข้อมูลทรัพย์สิน</li>
</ol>
</div>

<div class="products form row">

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a>เพิ่มข้อมูลทรัพย์สิน</a></li>
        <li role="presentation" class="disabled" onclick="added()"><a>เพิ่มสำเนาโฉนดที่ดิน</a></li>
        <li role="presentation" class="disabled" onclick="added()"><a>เพิ่มภาพถ่ายพื้นที่และบริเวณรอบข้าง</a></li>
        <li role="presentation" class="disabled" onclick="added()"><a>เพิ่มเอกสารการใช้ประโยชน์พื้นที่</a></li>
    </ul>
</div>
<script type="text/javascript">function added(){alert('กรุณาบันทึกข้อมูลทรัพย์สินก่อนทำการเพิ่มเอกสารอื่น ๆ');}</script>

<div class="assetInformations form">
<?php echo $this->Form->create('AssetInformation'); ?>
    <fieldset>
            
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
            <?php echo $this->Form->input('asset_info_Boundary',array('label'=>'เขตติดต่อ','maxlength'=>'30','div'=>array('class'=>'col-lg-6 form-group')));?>
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
            <?php echo $this->Form->input('asset_info_gps_coordinate',array('onkeypress'=>'validate(event)','label'=>'พิกัด GPS','maxlength'=>'30','div'=>array('class'=>'col-lg-6 form-group'), 
				'wrap'=>'input-group',
				'afterInput'=>'<span class="input-group-btn"><button type="button" data-toggle="modal" data-target="#myMapModal" class="btn btn-default"><span class="glyphicon glyphicon-globe"></span></button></span>')); ?>
			

        </div>
        
        <div class ="row">
            <?php echo $this->Form->input('asset_info_remark',array('label'=>'หมายเหตุ','maxlength'=>'50','div'=>array('class'=>'col-lg-6 form-group')));?>
        </div>
        
        <?php echo $this->Form->input('created_by',array('type'=>'hidden'));?>
        <?php echo $this->Form->input('modified_by',array('type'=>'hidden'));?>
        

    </fieldset>
    <?php echo $this->Form->button(__('บันทึก'),array('type'=>'submit','class'=>'btn btn-primary btn-form')); ?>
    <?php echo $this->Form->button(__('ยกเลิก'),array('onclick'=>"window.location.href='/AssetInformations/index'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
 <?php echo $this->Form->end(); ?>
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
									<button class="btn btn-default" type="button" id="btnGeoCoderSearch">Go!</button>
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
        
        if( !regex.test(key)) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    document.forms[0].elements['data[AssetInformation][district_id]'].options.length = 1;
    document.forms[0].elements['data[AssetInformation][sub_district_id]'].options.length = 1;
    
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