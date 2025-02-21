<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konwersja typów</title>
</head>
<body>
    <h1>Konwersja typów</h1>

    <h3>Typy zmiennych - przykłady:</h3>

    <?php
        $zmienna1 = 'Ala ma kota';
        // zmienna typu string
        echo '<br>';
        var_dump($zmienna1);
        $zmienna1 = 10;
        // zmienna typu integer
        echo '<br>';
        var_dump($zmienna1);
        $zmienna1 = 123.123;
        // zmienna typu float
        echo '<br>';
        var_dump($zmienna1);
        
        echo '<br>'.'<br>';
        echo $zmienna1.'<br>';
        var_dump($zmienna1);
    ?>
    <br><br><hr>
    <h3>Konwersja automatyczna</h3>
    <?php
        $zmienna11 = "Ala";
        $zmienna12 = " ma ";
        $zmienna13 = 5.111;
        echo var_dump($zmienna13).'<br><br><br>';

        echo var_dump($zmienna11.$zmienna12.$zmienna13).'<br>';

        // próba konwersju znaku + na konkatenacje

        // $zmienna14 = ($zmienna11 + $zmienna12 + $zmienna13);
        // echo($zmienna14).'<br>';
        // var_dump($zmienna14);

        // nastąpiła próba automatycznej konwersji typów danych do zgodnej z typem działania - efektem jest błąd

    ?>
    <br><br><hr>
    <h3>Rzutowanie (typowanie) - operatory konwersji (rzutowania) typów i funkcje konwertujące</h3>

    <?php
        echo('(int)/(integer), (float)/(double)/(real), (bool)/(boolean), (string), (array), (object), (unset)'.'<br>')
    ?>
    <?php
        // wymusznie konwersji

        $liczba1 = 1.5;
        var_dump($liczba1);
        echo('<br>');
        $liczba2 = (int)($liczba1); // operator
        var_dump($liczba1);
        echo('<br>');
        var_dump($liczba2);
        echo('<br>');

        $liczba3 = (int)false; // operator
        var_dump($liczba3);
        echo('<br>');
        $liczba4 = false; 
        settype($liczba4, "integer"); //funkcja
        var_dump($liczba4);
        echo('<br>');
    ?>
    <br><br><hr>
    <h3>Funkcje konwertujące</h3>
    <?php
        // wymuszanie konwersji
        $liczba1 = 1.5;
        var_dump($liczba1);
        echo('<br>');
        echo intval($liczba1);
        echo('<br>');
        var_dump($liczba1);
        echo('<br>');
        var_dump(intval($liczba1));
        echo('<br>');
        $liczba2 = "555.55";
        var_dump($liczba2);
        echo('<br>');
        var_dump(intval($liczba2));
        echo('<br>');
        var_dump(strval($liczba2));
        // pozostałe funkcje konwersji: int, intval, floatval, doubleval, strval
        echo '<br>';
        $liczba3 = " 1.75aaa";
        var_dump($liczba3);
        echo '<br>';
        var_dump(floatval($liczba3));
        echo '<br>';
        var_dump(intval($liczba3));
        echo '<br><br><br>';

        $liczba5 = boolval ("Ala ma kota"); //funckja

        var_dump($liczba5);
        echo('<br>');
    ?>
    <br><br><hr>
    <h3>Funckje testujące typ zmiennej</h3>
    <?php
        $liczba11 = "125xyz";

        echo(int)(is_array($liczba11));
        echo '<br>';
        echo(int)(is_double($liczba11)); //is_float, is_real
        echo '<br>';
        echo(int)(is_int($liczba11)); //is_long, is_integer
        echo '<br>';
        echo(int)(is_string($liczba11));
        echo '<br>';
        echo(int)(is_bool($liczba11));
        echo '<br>';
        echo(int)(is_null($liczba11));
        echo '<br>';
        echo(int)(is_numeric($liczba11));
        echo '<br>';
        echo(int)(is_scalar($liczba11));
        echo '<br>';
        echo(int)(is_object($liczba11));
        echo '<br>';
        echo(int)(is_callable($liczba11));
        echo '<br>';
    ?>
</body>
</html>