<!-- 5.Napisz skrypt sumowania dwu liczb  m, n, pod warunkiem że należą one do przedziału <1;102>(if) -->

<?php
    $m = 10;
    $n = 20;

    if ( ($m >= 1 && $m <= 102) && ($n >= 1 && $n <= 102)) {
        echo "m plus n to: " . $m + $n;
    }
?>