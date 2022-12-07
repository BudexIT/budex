<!-- 20. Program, który sprawdzi czy zmienna x jest równa zmiennej y i czy obie zmienne są tego samego typu (if) -->

<?php
    $x = 2;
    $y = 20;

    if ($x == $y) {
        echo "x jest równy y";
    } else if ($x === $y) {
        echo "x jest równy y z uwzględnieniem typów";
    } else {
        echo "x i y nie są sobie równe";
    }
?>