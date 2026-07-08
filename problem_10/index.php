<?php

$tests=array(6,4,9,3,12,8,7); 
for( $i= 0; $i<count($tests); $i++ ) {
    for( $j= 0; $j<count($tests)-$i-1; $j++ ) {
        if($tests[$j]> $tests[ $j+ 1] ) {
            $temp = $tests[$j];
            $tests[$j] = $tests[$j+ 1];
            $tests[$j+1] = $temp;
    }
}
}
for( $i= 0; $i<count($tests); $i++ ) {
    echo($tests[$i]);
    echo "<br>";
}
?>