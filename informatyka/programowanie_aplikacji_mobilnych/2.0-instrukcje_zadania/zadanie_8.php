<!-- 8.Podajemy dwie liczby. Program wykonuje operację dzielenia. Uwzględnij błąd dzielenia przez zero.(if) -->

<?php
    $liczba_1 = 10;
    $liczba_2 = 5;

    // Jeśli liczba druga nie jest zerem to podziel
    if (!($liczba_2 == 0)) {
        echo "Wynik dzielenia liczby pierwszej przez drugą to: " . $liczba_1 / $liczba_2;
    } else {
        echo "Druga liczba nie może być równa zeru";
    }
?>