<?php
    header("Content-Type: application/json");
    require_once('dbconfig.php');
    require_once('GetGalleryData.php');
   if(isset($_GET['getData'])){
    $object = new GetGalleryData();
    $ourWorkData = $object->GalleryData();
    $i = 0;
    $jsonData = '{';
    if(!empty($ourWorkData)){
           	 foreach($ourWorkData as $row){
			 	    $i++;
			     	$tag =   $row['tag'];
                    $projectName = $row['projectname'];
			        $jsonData .= '"ourwork'.$i.'":{"tag":"'.$tag.'","projectname": "'.$projectName.'"},';
			 }
	 $jsonData = chop($jsonData,",");
     $jsonData .= '}';
     echo $jsonData;
    }
}