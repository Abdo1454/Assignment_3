<?php
$tests=array(5,4,9,3,1,7,5,8,6); 
function RouteBubble ($arr ,$n){

        for($i=0;$i<$n;$i++){

        for($j=0;$j<$n-$i-1;$j++){

                 if($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                 }

        }


        }
        return $arr;
}
$tests = RouteBubble($tests, count($tests));
 for($i=0;$i<count($tests);$i++){
    echo $tests[$i];
    echo "<br>";
 }


?>