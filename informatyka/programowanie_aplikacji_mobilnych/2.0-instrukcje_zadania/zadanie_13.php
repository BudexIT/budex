<!-- 13.Program, który sprawdzi, na podstawie wprowadzonych zarobków, czy danej osobie zostanie udzielony kredyt. Otrzymanie kredytu jest możliwe jeśli zarobki przekroczą 1000 zł(if) -->

<?php
    $zarobki = 20;

    if ($zarobki > 1000) {
        echo "kredyt zostanie udzielony szefie";
    }
    else {
        echo "nie można udzielić kredytu";
    }
?>