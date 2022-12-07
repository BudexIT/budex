<!-- 12.Napisz skrypt, który oceni liczbę  czy  należy ona do przedziału 0..100(if) -->

<?php
    $liczba = 20;

    if ($liczba > 0 && $liczba < 100) {
        echo "liczba należy do przedziału od 1 do 100";
    }
    else {
        echo "liczba nie należy do przedziału od 1 do 100";
    }
?>