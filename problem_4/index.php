<?php

$films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";

$found = false;

for ($i = 0; $i < count($films); $i++) {

    if ($keyword == $films[$i]) {
        echo "YES";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "NO";
}

?>