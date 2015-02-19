<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; ข้อมูลทรัพย์สิน</h5>
    </div>
</div>
    <div class="col-md-12">
        <h3 class="page-header actives" style="margin-top: 20px;">ค้นหาข้อมูลทรัพย์สินแบบทั่วไป</h3>
    </div>

<div class="assetInformations form-horizontal">
    <?php echo $this->Form->create('AssetInformation', array('action' => 'index')); ?>
    <div class="panel panel-default">
        <div class="panel panel-body" style="box-shadow:none; padding-bottom: 0px;" >
            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label right">ประเภทการค้นหา : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('search_type', array(
                        'label' => FALSE,
                        'options' => array('general' => 'ทั่วไป', 'detail' => 'ละเอียด'),
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
                        'label' => FALSE,
                        'onkeypress'=>'isThai(event)'));
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
                        'label' => FALSE,
                        'onkeypress'=>'isThai(event)'));
                    ?>
                </div>
                <div class="col-lg-2">
                    <label class="control-label right">เลขที่ดิน : </label>
                </div>
                <div class="col-lg-2">
                    <?php
                    echo $this->Form->input('asset_info_parcel_no', array(
                        'maxlength' => '50',
                        'label' => FALSE,
                        'onkeypress'=>'isThai(event)'));
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
                        'label' => FALSE,
                        'onkeypress'=>'isThai(event)'));
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
                        'empty' => 'กรุณาเลือก'));
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
                    <?php echo $this->Form->input('asset_info_cost_estimate',array('onkeypress'=>'validate(event)','label'=> FALSE ,
                        'onKeyDown' => "if(this.value.length==9 && event.keyCode != 8 ) return false;",
                        'onblur'=>'precisionFix(this.value)'))
                    ;?>
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
                    <?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span>&nbsp;' . __('ค้นหา'), array('type' => 'submit', 'class' => 'btn btn-primary btn-form')); ?>
                    &nbsp;&nbsp;
                        <?php echo $this->Form->button(__('ยกเลิก'), array('onclick' => "window.location.href='../AssetInformations/index'", 'type' => 'button', 'class' => 'btn btn-default btn-form')); ?>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="margin-top: 7px; margin-bottom: 2px;">ผลการค้นหา</h3>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="20"><?php echo $this->Paginator->sort('id', 'ลำดับ'); ?></th>
                <th><?php echo $this->Paginator->sort('asset_info_name', 'รายชื่อ ศบ/วัดร้าง'); ?></th>
                <th><?php echo $this->Paginator->sort('sub_district_id', 'แขวง'); ?></th>
                <th><?php echo $this->Paginator->sort('district_id', 'เขต'); ?></th>
                <th><?php echo $this->Paginator->sort('province_id', 'จังหวัด'); ?></th>
                <th><?php echo $this->Paginator->sort('asset_info_title_deed_no', 'โฉนดเลขที่'); ?></th>
                <th><?php echo $this->Paginator->sort('asset_area', 'เนื้อที่'); ?></th>
                <th class="actions" width="80"><?php echo __('เอกสาร'); ?></th></tr>
        </thead>
        <tbody>
            <?php $i=0 ?>
            <?php foreach ($assetInformations as $assetInformation): ?>
                <tr>
                    <?php $i++ ?>
                    <td><?php echo h($i); ?>&nbsp;</td>
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
                    <td><?php echo h($assetInformation['AssetInformation']['asset_info_rai'] . '-' . $assetInformation['AssetInformation']['asset_info_ngan'] . '-' . $assetInformation['AssetInformation']['asset_info_square_wah']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'edit', $assetInformation['AssetInformation']['id']), array('title' => __('Edit'), 'escape' => false)); ?>
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $assetInformation['AssetInformation']['id']), array('title' => __('View'), 'escape' => false)); ?>
                        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $assetInformation['AssetInformation']['id']), array('escape'=>false, 'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $assetInformation['AssetInformation']['id'])); ?>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
<div class="pagination">
    <?php
    
    echo $this->Paginator->prev('< ' . __('previous'), array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('tag'=>'li', 'separator' => '', 'currentTag'=>'a', 'currentClass'=>'active'));
    echo $this->Paginator->next(__('next') . ' >', array('tag' => 'li'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next disabled'));

    ?>
</div>

<style type="text/css">
    #map-canvas {
        width:568px;
        height:480px;
    }
</style>

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myMapModal">
    Launch demo modal
</button>-->

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

<script language="JavaScript">
    document.forms[0].elements['data[AssetInformation][district_id]'].options.length = 1;
    document.forms[0].elements['data[AssetInformation][sub_district_id]'].options.length = 1;
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
            $('.actives').text('ค้นหาข้อมูลทรัพย์สินแบบละเอียด');

        } else {
            $('.check_search_type').hide("fast");
            $('.actives').text('ค้นหาข้อมูลทรัพย์สินแบบทั่วไป');
        }

    }
    function precisionFix(value){
        var result=Math.round(value*100)/100;  
        $("#AssetInformationAssetInfoCostEstimate").val(result);
    }
        
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[\b]|[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault)
                theEvent.preventDefault();
        }
    }
    
    function isThai(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /^[a-z]+[a-z0-9]*$/i;
        if (regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault)
                theEvent.preventDefault();
        }
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

    $('#btnGeoCoderSearch').click(function () {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address': $('#txtGeoCoderSearch').val()}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                marker.setPosition(results[0].geometry.location);
                marker.setMap(map);
            }
        });
    });

</script>