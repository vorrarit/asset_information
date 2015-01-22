<?php $a=1; ?>
<?php
    foreach ($assetInformations as $assetInformation) {
        echo $a . ',' ;        
        echo h($assetInformation['AssetInformation']['asset_info_name']) . ',' ;
        echo h($assetInformation['SubDistrict']['sub_district_name']) .',';
        echo h($assetInformation['District']['district_name']).','  ; 
        echo h($assetInformation['Province']['province_name']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_title_deed_no']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_mapsheet_no']) .',' ;
        echo h($assetInformation['AssetInformation']['asset_info_parcel_no']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_dealing_file_no']) .',' ;        
        echo h($assetInformation['AssetInformation']['asset_info_rai']). ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_ngan']) . ',' ;
        echo h($assetInformation['AssetInformation']['asset_info_square_wah']) .',' ;        
        echo            $assetInformation['AssetInformation']['asset_info_north'] .','.
                        $assetInformation['AssetInformation']['asset_info_south'] .','.
                        $assetInformation['AssetInformation']['asset_info_east'] .','.
                        $assetInformation['AssetInformation']['asset_info_west'] 
                
               . "\r\n";
        $a=$a+1;
    }
                
 ?>


	
