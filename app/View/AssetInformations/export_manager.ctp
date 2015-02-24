<?php $a=1; ?>
<?php
echo 'ลำดับ' . ',' ;
echo 'รายชื่อ ศบก./วัดร้าง'. ',' ;
echo 'แขวง'. ',' ;
echo 'เขต'. ',' ;
echo 'จังหวัด'. ',' ;
echo 'โฉนดที่ดินเลขที่'. ',' ;
echo 'หน้าสำรวจ'. ',' ;
echo 'เนื้อที่'. ',' ;
echo 'หมายเหตุ'. ',' ;
echo 'ราคาประเมินที่ดิน'

. "\r\n";



    foreach ($assetInformations as $assetInformation) {
        echo $a . ',' ;        
        echo h($assetInformation['AssetInformation']['asset_info_name']) . ',' ;
        echo h($assetInformation['SubDistrict']['sub_district_name']) .',';
        echo h($assetInformation['District']['district_name']).','  ; 
        echo h($assetInformation['Province']['province_name']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']) .',' ;        
        echo h($assetInformation['AssetInformation']['asset_info_rai'] . '-' . 
                                $assetInformation['AssetInformation']['asset_info_ngan'] . '-' . 
                                $assetInformation['AssetInformation']['asset_info_square_wah']). ',' ;
        
        echo h($assetInformation['AssetInformation']['asset_info_remark']).',';
        echo h($assetInformation['AssetInformation']['asset_info_cost_estimate'])
               . "\r\n";
        $a=$a+1;
    }
                
 ?>


