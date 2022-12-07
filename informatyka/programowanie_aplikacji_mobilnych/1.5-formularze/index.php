<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Inputy w PHP</title>
</head>
<body style="font-family: 'system-ui', sans-serif;">
    <form action="" method="POST">
        <label>
            <p>Wprowadź bok kwadratu:</p>
            <input type="number" name="bok" min="1">
            <input type="submit" value="Oblicz pole">
        </label>
    </form>
    <?php

        // deklarowanie zmiennych z inputa o nazwie bok
        // pole jest równe bokowi do kwadratu
        $bok = $_POST['bok'];
        $pole = $bok ** 2;

        // wyrzucam na ekran bok, a następnie pole
        echo "Bok kwadratu wynosi: " . $bok;
        echo "<hr>";
        echo "<h3>Pole kwadratu to: </h3>" . $pole;

    ?>
</body>
</html>