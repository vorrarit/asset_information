<style>
    th{text-align: center;}
    td{text-align: center;}
</style>
<ol class="breadcrumb">
    <li><a href="index">จัดการทรัพย์สิน</a></li>
    <li class="active">รายงานทรัพย์สิน (ทั่วไป)</li>
</ol>

<div class="assetInformations form row">
<?php echo $this->Form->create('AssetInformation',array('action'=>'multiExport')); ?>

    <h4><?php echo __('รายงานทรัพย์สิน (ทั่วไป)'); ?></h4>
    <table class="table" border='2'>
        <tbody>  
            <tr>	
                <th rowspan="2"><?php echo h('ลำดับที่'); ?></th>
                <th rowspan="2"><?php echo h('รายชื่อ ศาสนาสมบัติกลาง'); ?></th>
                <th colspan="3"><?php echo h('ที่ตั้ง'); ?></th>
                <th rowspan="2"><?php echo h('เลขที่โฉนด'); ?></th>
                <th rowspan="2"><?php echo h('ระวาง'); ?></th>
                <th rowspan="2"><?php echo h('เลขที่ดิน'); ?></th>
                <th rowspan="2"><?php echo h('หน้าสำรวจ'); ?></th>
                <th colspan="3"><?php echo h('เนื้อที่'); ?></th>
                <th rowspan="2"><?php echo h('เขตติดต่อ'); ?></th>

            </tr>
            <tr>
                <th><?php echo h('แขวง'); ?></th>
                <th><?php echo h('เขต'); ?></th>
                <th><?php echo h('จังหวัด'); ?></th>
                <th><?php echo h('ไร่'); ?></th>
                <th><?php echo h('งาน'); ?></th>
                <th><?php echo h('ตรว.'); ?></th>
            </tr>
            <?php $a=1; ?>
	<?php foreach ($assetInformations as $assetInformation): ?>
            <tr>
                <td><?php echo $a ; ?>&nbsp;</td>
                <td style="text-align: left;"><?php echo $this->Html->link($assetInformation['AssetInformation']['asset_info_name'],
                        array('controller' => 'asset_informations', 'action' => 'view', $assetInformation['AssetInformation']['id'])); ?>&nbsp;</td>
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
                <td style="text-align: left;"><?php echo 
                        $assetInformation['AssetInformation']['asset_info_north'] .'<br>'.
                        $assetInformation['AssetInformation']['asset_info_south'] .'<br>'.
                        $assetInformation['AssetInformation']['asset_info_east'] .'<br>'.
                        $assetInformation['AssetInformation']['asset_info_west'] 
                        ; ?></td>

            </tr>
            <?php $a=$a+1; ?>
        <?php endforeach; ?>   


        </tbody>
    </table>

    <?php echo $this->Form->button(__('บันทึกรายงาน'), array('type'=>'submit','class'=>'btn btn-primary btn-form')); ?>&nbsp;&nbsp;
    <?php echo $this->Form->button(__('พิมพ์รายงาน'),array('type'=>'button', 'onclick'=>'window.print()','class'=>'btn btn-primary btn-form')); ?>&nbsp;&nbsp;
    <?php echo $this->Form->button(__('ยกเลิก'),array('onclick'=>"window.location.href='../AssetInformations/report/'",'type'=>'button','class'=>'btn btn-default btn-form')); ?>
 <?php echo $this->Form->end(); ?>


</div>