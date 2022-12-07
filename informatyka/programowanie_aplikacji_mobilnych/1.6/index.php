<?php
    $arr = [1,2,3,4,5,6];

    foreach ($arr as $val) {
        echo " " . $val . " of " .implode(', ', $arr);
    }
?>