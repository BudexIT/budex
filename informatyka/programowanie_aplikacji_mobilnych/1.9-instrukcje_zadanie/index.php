<?php
    $x = 10;

    // operator 'modulo', czyli reszta z dzielenia
    // jeśli liczba nie ma reszty z dzielenia przez 2 to jest parzysta

    if ($x % 2 == 0) {
        echo "liczba jest parzysta";
    } else {
        echo "liczba jest nieparzysta";
    }
    
    $a = 1;
    $b = "1";


    if ($a == $b) {

        // 'a' jest równe 'b', ponieważ operator '==' konwertuje typy
        // gdyby operatorem był '==='. warunek nie spełniłby się
        
        echo "<p> $a jest równe $b </p>";
    }
    else {
        echo "<p> $a nie jest równe $b </p>";
    }
?>