<!-- 14.Jeżeli dana liczba jest mniejsza od 14 dodaj do niej liczbę 5, w przeciwnym razie odejmij od niej liczbę 5(if) -->

<?php
    $liczba = 20;

    if ($liczba < 14) {
        echo $liczba += 5;
        echo $liczba;
    }
    else {
        echo $liczba -= 5;
        echo $liczba;
    }
?>