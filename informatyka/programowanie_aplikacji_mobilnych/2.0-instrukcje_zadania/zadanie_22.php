<!-- 22. Program który podniesie liczbę do kwadratu jeśli jest ona większa  lub równa 1 (if) -->

<?php
    $bok_kwadratu = 2;

    if ($bok_kwadratu >= 1) {
        echo "pole kwadratu jest równy: " . $bok_kwadratu ** 2;
    } else {
        echo "podaj wartość dodatnią";
    }
?>