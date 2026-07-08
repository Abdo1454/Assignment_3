<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

for ($i = 0; $i < count($tests); $i++) {

    if (is_bool($tests[$i])) {

        if ($tests[$i]) {
            echo "Yes";
        } else {
            echo "No";
        }

    } else {
        echo $tests[$i];
    }

    echo "<br>";
}

?>