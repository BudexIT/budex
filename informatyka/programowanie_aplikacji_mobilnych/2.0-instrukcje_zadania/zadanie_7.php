<!-- 7.Program obliczania pola powierzchni całkowitej P sześcianu o danej krawędzi K, pod warunkiem że dane są dodatnie.(if) -->

<?php
    $szescian_krawedz = 20;

    if ($szescian_krawedz > 0 ) {
        echo "Pole szacianu to: " . $szescian_krawedz ** 3;
    } else {
        echo "Krawędź sześcianu musi być wartością dodatnią!";
    }
?>