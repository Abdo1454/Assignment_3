<?php
$tests=array(5,4,9,3,1,7,5,8,6); 
$max=$tests[0];
for ($i= 1; $i<count($tests); $i++) {
    if ($max<$tests[$i]) {
    $max=$tests[$i];
    }
}
echo $max ;
?>