<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

function calc($num1, $num2)
{
    echo "Multiplication: " . ($num1 * $num2);
    echo "<br>";

    echo "Subtraction: " . ($num1 - $num2);
    echo "<br>";

    if ($num2 != 0) {
        echo "Division: " . ($num1 / $num2);
    } else {
        echo "Cannot divide by zero.";
    }
}

calc($num1, $num2);

?>