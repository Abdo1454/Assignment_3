<?php


function sumArray($arr)
{
    $sum = 0;

    foreach ($arr as $value) {
        $sum += $value;
    }

    return $sum;
}

$numbers = [10, 20, 30, 40];

echo "Sum = " . sumArray($numbers);

?>
