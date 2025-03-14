<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_funkcja_korniak</title>
</head>
<body>
    <h1>Ćwiczenie: php_funkcja</h1>
    <h3>Proszę napisać skrypt, zawierający funkcję sprawdzającą, czy wpisana liczba jest podzielna przez 3.</h3>

    <form action="" method="get">
        <label for="inputNum">Wprowadź liczbę:
            <input type="text" name="inputNum" id="inputNum">
        </label>
        <input type="submit" value="Wyślij zapytanie">
    </form>

    <?php 
        $liczba = @$_GET['inputNum'];

        $liczbaModulo = $liczba % 3;

        echo("Reszta z dzielenia modulo wynosi: $liczbaModulo.".'<br>');
        if ($liczbaModulo > 0) {
            echo("Liczba nie jest podzielna przez 3.");
        }
        else {
            echo("Liczba jest podzielna przez 3.");
        }
    ?>
</body>
</html>