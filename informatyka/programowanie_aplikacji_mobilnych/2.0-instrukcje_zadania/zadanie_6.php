<!-- 6.Wczytaj dwie liczby i wyświetl je w kolejności malejącej.(if) -->

<?php
    $liczba_1 = 10;
    $liczba_2 = 20;

    if ($liczba_1 > $liczba_2) {
        echo "liczba 1: " . $liczba1 . ", liczba 2: " . $liczba_2;
    } else if ($liczba_1 < $liczba_2) {
        echo "liczba 2: " . $liczba2 . ", liczba 1: " . $liczba_1;
    } else {
        echo "obie liczby są sobie równe"
    }
?>