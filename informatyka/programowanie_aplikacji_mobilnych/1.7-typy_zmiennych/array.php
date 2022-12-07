<?php

    // tworzenie tablicy książki z trzema wartościami tekstowymi po przecinku
    $ksiazki = array("dżuma", "potop", "obcy");
    // echo implode($ksiazki, ", ");
    // wyrzucenie pierwszego elementu tablicy, bo zaczyna się od zera
    echo $ksiazki[0];

    // przypisanie tabeli od razu do numery indeksu
    $imie[0] = "Jan";
    $imie[1] = "Paweł";
    $imie[2] = "Drugi";
    echo " " . $imie[1];

    $tab[] = 1;
    $tab[] = 2;
    $tab[] = 3;
    // jeśli nie podamy indeksu, to PHP przypisze je sam
    echo " " . $tab[2];

    // tworzenie talicy asocjacyjnej (z kluczami)
    $osoba = array(
        "nazwisko" => "Kowalski",
        "imie" => "Jan",
        "wiek" => 40,
    );

    // zamiast pisać indeks imienia kowalski,
    // utworzyliśmy dla niego klucz i wzywamy
    // wartość nazwiska za pomocą stworzonego klucza
    echo "<br> " .$osoba["nazwisko"] . " " . $osoba["imie"] . ", wiek: " . $osoba["wiek"];

    // tworzenie tablicy wielowymiarowej (tablica zawierające mniejsze tablice)
    // mniejsze tablice nie potrzebują deklaracji, bo same w sobie nią są
    $lista_osob = array(
        array(
            "nazwisko" => "Kowalski",
            "imie" => "Jan",
            "wiek" => 40,
        ),
        array(
            "nazwisko" => "Nowak",
            "imie" => "Jakub",
            "wiek" => 45,
        ),
        // zapis w jednej linii
        array("nazwisko" => "Suske", "imie" => "Paweł", "wiek" => 50)
    );

    // biorę z pierwszej wartości numer tablicy,
    // a następnie z niej biorę wartość po kluczu "imie"
    echo "<br>" . $lista_osob[2]["imie"];

?>