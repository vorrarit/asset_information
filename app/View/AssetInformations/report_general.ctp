<style>
    th{text-align: center;}
    td{text-align: center;}
</style>
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header">จัดการทรัพย์สิน &gt; รายงานทรัพย์สิน(ทั่วไป)</h5>
    </div>
</div>

<div class="assetInformations form row">
    <?php echo $this->Form->create('AssetInformation', array('action' => 'report_general')); ?>

  <div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="margin-top: 7px; margin-bottom: 2px;">ผลการค้นหา</h3>
    </div>
      <!--<table class="table table-bordered table-striped" >-->
      <table class="table table-bordered table-striped tablefixed" >
        <thead>
            <tr>	
                
<!--                    <th rowspan="2"><?php // echo h('ลำดับที่'); ?></th>
                        <th rowspan="2"><?php // echo h('รายชื่อ ศาสนาสมบัติกลาง'); ?></th>
                        <th colspan="3"><?php // echo h('ที่ตั้ง'); ?></th>
                        <th rowspan="2"><?php // echo h('เลขที่โฉนด'); ?></th>
                        <th rowspan="2"><?php // echo h('ระวาง'); ?></th>
                        <th rowspan="2"><?php // echo h('เลขที่ดิน'); ?></th>
                        <th rowspan="2"><?php // echo h('หน้าสำรวจ'); ?></th>
                        <th colspan="3"><?php // echo h('เนื้อที่'); ?></th>
                        <th rowspan="2"><?php // echo h('เขตติดต่อ'); ?></th>-->
                        
                        
                        <th rowspan="2" style="width: 5%"><?php echo h('ลำดับที่'); ?></th>
                        <th rowspan="2" style="width: 18%"><?php echo h('รายชื่อ ศาสนาสมบัติกลาง'); ?></th>
                        <th colspan="3" style="width: 18%"><?php echo h('ที่ตั้ง'); ?></th>
                        <th rowspan="2" style="width: 7%"><?php echo h('เลขที่โฉนด'); ?></th>
                        <th rowspan="2" style="width: 8%"><?php echo h('ระวาง'); ?></th>
                        <th rowspan="2" style="width: 8%"><?php echo h('เลขที่ดิน'); ?></th>
                        <th rowspan="2" style="width: 7%"><?php echo h('หน้าสำรวจ'); ?></th>
                        <th colspan="3" style="width: 15%"><?php echo h('เนื้อที่'); ?></th>
                        <th rowspan="2" style="width: 15%"><?php echo h('เขตติดต่อ'); ?></th>

                    </tr>

                    <tr>
                        <th style="border-bottom:none;" style="width: 6%"><?php echo h('แขวง'); ?></th>
                        <th style="border-bottom:none;" style="width: 6%"><?php echo h('เขต'); ?></th>
                        <th style="border-bottom:none;" style="width: 6%"><?php echo h('จังหวัด'); ?></th>
                        <th style="border-bottom:none;" style="width: 5%"><?php echo h('ไร่'); ?></th>
                        <th style="border-bottom:none;" style="width: 5%"><?php echo h('งาน'); ?></th>
                        <th style="border-bottom:none;" style="width: 5%"><?php echo h('ตรว.'); ?></th>
                    </tr>
                </thead>
                <tbody> 
                <?php $a = 1; ?>
                <?php foreach ($assetInformations as $assetInformation): ?>
                    <tr>
                        <td><?php echo $a; ?>&nbsp;</td>
                        <td><?php echo $this->Html->link($assetInformation['AssetInformation']['asset_info_name'], array('controller' => 'asset_informations', 'action' => 'view', $assetInformation['AssetInformation']['id']));
                ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['SubDistrict']['sub_district_name']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['District']['district_name']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['Province']['province_name']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_mapsheet_no']); ?></td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_parcel_no']); ?></td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_rai']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_ngan']); ?>&nbsp;</td>
                        <td><?php echo h($assetInformation['AssetInformation']['asset_info_square_wah']); ?>&nbsp;</td>
                        <td ><?php
                            echo
                            'ทิศเหนือ: ' . $assetInformation['AssetInformation']['asset_info_north'] . '<br>' .
                            'ทิศใต้: ' .$assetInformation['AssetInformation']['asset_info_south'] . '<br>' .
                            'ทิศตะวันออก: ' .$assetInformation['AssetInformation']['asset_info_east'] . '<br>' .
                            'ทิศตะวันตก: ' .$assetInformation['AssetInformation']['asset_info_west']
                            ;
                            ?></td>

                    </tr>
    <?php $a = $a + 1; ?>
<?php endforeach; ?>   


                </tbody>
            </table>
</div>
    <div class="hideButton">
        <?php echo $this->Form->button(__('บันทึกรายงาน'), array('type' => 'submit', 'class' => 'btn btn-primary btn-form')); ?>&nbsp;&nbsp;
        <?php echo $this->Form->button(__('พิมพ์รายงาน'), array('type' => 'button', 'onclick' => 'window.print()', 'class' => 'btn btn-primary btn-form')); ?>&nbsp;&nbsp;
        <?php echo $this->Form->button(__('ยกเลิก'), array('onclick' => "window.location.href='/AssetInformations/report/'", 'type' => 'button', 'class' => 'btn btn-default btn-form')); ?>
        <?php echo $this->Form->end(); ?>
    </div>

        
    </div>
</div>
