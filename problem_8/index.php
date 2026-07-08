<?php
$n = 9;

function getRandomString($n) {
    return bin2hex(random_bytes($n / 2));
}

echo getRandomString($n);
?>