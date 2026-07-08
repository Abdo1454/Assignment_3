<?php
$films=array("avatar","Prestige","avatar","Prestige"); 
$keyword="avatar"; 
$counter= 0;
foreach($films as $key=>$value){
    if($keyword==$films[$key]){
        $counter++;
    }
}
echo $counter;
?>