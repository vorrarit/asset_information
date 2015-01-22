<style>
    th{text-align: center;}
    td{text-align: center;}
</style>

<ol class="breadcrumb">
    <li><a href="index">จัดการทรัพย์สิน</a></li>
    <li class="active">รายงานทรัพย์สิน (ผู้บริหาร)</li>
</ol>

<div class="assetInformations form row">
<?php echo $this->Form->create('AssetInformation',array('action'=>'multiExport')); ?>

    <h4><?php echo __('รายงานทรัพย์สิน (ผู้บริหาร)'); ?></h4>
    <table class="table" border='2'>
        <tbody>  
            <tr>	
                <th><?php echo h('ลำดับที่'); ?></th>
                <th><?php echo h('รายชื่อ ศบก./วัดร้าง'); ?></th>
                <th><?php echo h('แขวง'); ?></th>
                <th><?php echo h('เขต'); ?></th>
                <th><?php echo h('จังหวัด'); ?></th>
                <th><?php echo h('โฉนดที่ดินเลขที่'); ?></th>
                <th><?php echo h('หน้าสำรวจ'); ?></th>
                <th><?php echo h('เนื้อที่'); ?></th>
                <th><?php echo h('หมายเหตุ'); ?></th>
                <th><?php echo h('ราคาประเมินที่ดิน'); ?></th>
            </tr>
            <?php $a=1; ?>
	<?php foreach ($assetInformations as $assetInformation): ?>
            <tr>
                <td><?php echo $a ; ?>&nbsp;</td>
                <td><?php echo h($assetInformation['AssetInformation']['asset_info_name']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['SubDistrict']['sub_district_name']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['District']['district_name']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['Province']['province_name']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['AssetInformation']['asset_info_rai'] . '-' . 
                                $assetInformation['AssetInformation']['asset_info_ngan'] . '-' . 
                                $assetInformation['AssetInformation']['asset_info_square_wah']   
                        ); ?>&nbsp;</td>
                <td style="text-align: left;">
                    <?php echo h($assetInformation['AssetInformation']['asset_info_remark']); ?>&nbsp;</td>
                <td><?php echo h($assetInformation['AssetInformation']['asset_info_cost_estimate']); ?>&nbsp;</td>
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
