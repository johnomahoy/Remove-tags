<?php
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 
	$groupcategory_id = $_REQUEST['groupcategory_id'];
	

	$returnFields = array('GroupName');
	$contacts = $app->dsFind('ContactGroup',100,0,'GroupCategoryId',$groupcategory_id,$returnFields);
	
	
	foreach($contacts as $contact=>$key){
		foreach($key as $value){
			 $values[] = $value;
		}
	}
  
	//$newval = implode(',',$values);

	for($i = 0; $i < count($values); $i++){
		$result = $app->dsDelete('ContactGroup',$values[$i]);
	}
	
}  
?> 

	