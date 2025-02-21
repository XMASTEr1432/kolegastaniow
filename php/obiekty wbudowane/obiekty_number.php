<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obiekty number</title>
</head>
<body>
    <!-- PRACA WŁASNA -->
    <h1>PHP - obiekty number</h1>

    <h3>Integer</h3>
    <p>
        Integer to liczba bez żadnych cyfr po przecinku.
    </p>
    <h4>Właściwości</h4>
    <?php 
        echo("Największa wielkość zmiennej int to: ".PHP_INT_MAX.'<br>');
        echo("Najmniejsza wielkość zmiennej int to: ".PHP_INT_MIN.'<br>');
        echo("Wielkość zmiennej int w bajtach to: ".PHP_INT_SIZE.'<br>');
    ?>
    <h4>Funkcje sprawdzające typ</h4>
    <?php 
        $zmienna1 = 1;
        $zmienna2 = "tekst";
        echo("\$zmienna1 to integer o wartości $zmienna1, a \$zmienna2 to tekst o wartości $zmienna2".'<br>');

        echo("Sprawdzenie czy \$zmienna1 to int (is_int()): ");
        var_dump(is_int($zmienna1));
        echo("<br>Sprawdzenie czy \$zmienna2 to int (is_int()): ");
        var_dump(is_int($zmienna2));
        echo("<br>Można też użyć is_integer() oraz is_long()");
    ?>
    <hr>
    <h3>Float</h3>
    <p>Float to liczba z kropką dziesiętną albo liczba z notacją matematyczną.</p>
    <h4>Właściwości</h4>
    <?php 
        echo("Największa wielkość zmiennej float to: ".PHP_FLOAT_MAX.'<br>');
        echo("Najmniejsza wielkość zmiennej float to: ".PHP_FLOAT_MIN.'<br>');
        echo("Liczba cyfr dziesiętnych, które można zaokrąglić do liczby zmiennoprzecinkowej i odwrotnie bez utraty precyzji, wynosi: ".PHP_FLOAT_DIG.'<br>');
        echo("Najmniejsza możliwa do przedstawienia liczba dodatnia x, taka że x + 1,0 != 1,0 to: ".PHP_FLOAT_EPSILON.'<br>');
    ?>
    <h4>Funkcje sprawdzające typ</h4>
    <?php 
        $zmienna1 = 1.123;
        $zmienna2 = "tekst";
        echo("\$zmienna1 to float o wartości $zmienna1, a \$zmienna2 to tekst o wartości $zmienna2".'<br>');

        echo("Sprawdzenie czy \$zmienna1 to float (is_float()): ");
        var_dump(is_float($zmienna1));
        echo("<br>Sprawdzenie czy \$zmienna2 to float (is_float()): ");
        var_dump(is_float($zmienna2));
        echo '<br>Można też użyć is_double()';
    ?>
    <hr>
    <h3>Infinity</h3>
    <p>Wartość liczbowa większa od <tt>PHP_FLOAT_MAX</tt> jest uznawana za infinite</p>
    <h4>Funkcje sprawdzające typ</h4>
    <?php 
        $zmienna1 = 1.12e311;
        $zmienna2 = "tekst";
        echo("\$zmienna1 to infinite o wartości $zmienna1, a \$zmienna2 to tekst o wartości $zmienna2".'<br>');
        echo("Sprawdzenie czy \$zmienna1 to finite (is_finite()()): ");
        var_dump(is_finite($zmienna1));
        echo("<br>Sprawdzenie czy \$zmienna1 to infinite (is_infinite()()): ");
        var_dump(is_infinite($zmienna1));
    ?>
    <hr>
    <h3>NaN</h3>
    <p>NaN oznacza, że zmienna nie jest liczbą. NaN używa się przy niemożliwych do oblicznia operacji matematycznych</p>
    <h4>Funkcja sprawdzająca typ</h4>
    <?php 
        $zmienna1 = NAN;
        $zmienna2 = "tekst";
        echo("\$zmienna1 to zmienna o wartości $zmienna1, a \$zmienna2 to tekst o wartości $zmienna2".'<br>');

        echo("Sprawdzenie czy \$zmienna1 to NaN (is_nan(): ");
        var_dump(is_nan($zmienna1));
    ?>
    <hr>
    <h3>Numerical Strings</h3>
    <p>
        Funckja <tt>is_numeric()</tt> w PHP służy do sprawdzenia czy zmienna jest w postaci liczbowej.
    </p>
    <?php 
        $zmienna1 = "123";
        $zmienna2 = "tekst";

        echo("\$zmienna1 to tekst o wartości $zmienna1, a \$zmienna2 to tekst o wartości $zmienna2".'<br>');

        echo("Sprawdzenie czy \$zmienna1 to liczba (is_numeric()): ");
        var_dump(is_numeric($zmienna1));
        echo("<br>Sprawdzenie czy \$zmienna2 to liczba (is_numeric()): ");
        var_dump(is_numeric($zmienna2));
    ?>
    <hr>
    <h3>Konwersja zmiennej na integer</h3>
    <?php 
        $zmienna1 = 123.123;
        $zmienna1_konw = (int)$zmienna1;
        $zmienna2 = "1234";
        $zmienna2_konw = intval($zmienna2);
        echo("\$zmienna1 ma wartość: $zmienna1. Zmienna po konwersji na integer przy użyciu <tt>(int)</tt>, <tt>(integer)</tt> albo <tt>intval()</tt> ma wartość: $zmienna1_konw");
        echo("<br>\$zmienna2 ma wartość: $zmienna2 (\$zmienna2 jest zmienną typu string). Zmienna po konwersji na integer przy użyciu <tt>(int)</tt>, <tt>(integer)</tt> albo <tt>intval()</tt> ma wartość: $zmienna2_konw");
    ?>
</body>
</html>