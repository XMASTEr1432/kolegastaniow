<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP - ćwiczenie</h1>

    <h3>Ćwiczenie: php_instrukcjesterujace</h3>

    <h4>Proszę napisać skrypt, określający jaką liczbą jest wartość pobrana z formularza do zmiennej $liczba: mniejsza od 0, większa od 0, parzysta, nieparzysta, równa 0. Jeżeli wpis nie jest liczbą, to powinna pojawić się informacja, że nie jest to liczba i informacja o typie danych.</h4>
    <h4>Ćwiczenie należy wykonać różnymi metodami (min. 1 poprawna), używając funkcji sterujących</h4>
     
    <form action="" method="get">
        <input type="text" name="liczba1" id="liczba1">
        <input type="submit" value="Wyślij">
    </form>

    <?php 
        $liczba1 = @$_GET['liczba1'];

        if (intval(is_numeric($liczba1)) != 0) {
            if (intval($liczba1 < 0)) {
                echo "Liczba jest mniejsza od zera <br>";
            }
            if (intval($liczba1 == 0)) {
                echo "Liczba jest równa zero <br>";
            }
            if (intval($liczba1 > 0)) {
                echo "Liczba jest większa od zera <br>";
            }
            if (intval($liczba1) % 2 == 0 && intval($liczba1 != 0))
            {
                echo "Liczba jest parzysta ";
            }
            elseif (intval($liczba1 != 0)) {
                echo "Liczba jest nieparzysta ";
            }
        }
        else {
            echo "To nie jest liczba"."<br>"."To jest string";
        };
    ?>
    <hr>
    <?php 
        $warunek = intval(is_numeric($liczba1)) != 0 ? : "To nie jest liczba"."<br>"."To jest string";
        echo $warunek;
    ?>
</body>
</html>