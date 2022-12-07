<!-- 11.Program obliczania wartości bezwzględnej z danej liczby.(if) -->

<?php
    $liczba = 20;

    if ($liczba < 0) {
        echo "wartość bezwzględna liczby: " . $liczba . ", to; " . abs($liczba);
    } else {
        echo "warotść bezwzględna liczby: " . $liczba . ", to: " . $liczba;
    }
?>