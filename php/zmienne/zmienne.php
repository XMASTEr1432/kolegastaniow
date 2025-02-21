<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Forma zapisu zmiennej</h3>

    <?php
        $zmienna = 12;
        $_zmienna = 24;
        $zmienna12 = 36;
        $zmienna_24 = 48;
        $zmiennaNowa = 96;
        echo nl2br("$zmienna,\n$_zmienna,\n$zmienna12,\n$zmienna_24,\n$zmiennaNowa")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Definiowanie zmiennych</h3>
    <?php
        $zmienna1 = 'Ala ma kota;';
        echo nl2br("$zmienna1 \n");
        $zmienna2 = 'Nam strzelać nie kazano';
        echo nl2br("$zmienna2 \n");
        $zmienna2 = $zmienna1;
        echo nl2br("$zmienna2 \n");
        $zmienna1 = 10;
        echo nl2br("$zmienna1 \n");
        $zmienna2 = 12.123;
        echo nl2br("$zmienna2 \n");
        $zmienna3 = true;
        echo nl2br("$zmienna3 \n");
        $zmienna4 = 'true';
        echo nl2br("$zmienna4 \n");
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Wyświetlanie wartości bez definiowania zmiennej</h3>
    <?php
        echo("Nie jestem zdefiniowaną zmienną")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Typy danych</h3>
    <?php
        echo("skalarne (proste), złożone, specjalne")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h2>Typy skalarne</h3>
    <?php
        echo("boolean, integer, float, string")
    ?>
    <h3>Typ boolean (logiczny)</h3>
    <?php
        $zmienna0 = false;
        echo($zmienna0.'<br>');
        $zmienna1 = true;
        echo($zmienna1.'<br>');
        $zmienna2 = false;
        echo($zmienna2);
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Typ integer (całkowitoliczbowy)</h3>
    <?php
    // liczby dziesiętne (decymalne)
    $zmienna3 = 123456;
    echo($zmienna3.'<br>');
    // liczby ósemkowe (oktalne)
    $zmienna4 = 016;
    echo($zmienna4.'<br>');
    // liczby szesnastkowe (heksadecymalne)
    $zmienna5 = 0xff;
    echo($zmienna5);
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Typ float (zmiennoprzecinkowe)</h3>
    <?php
        // liczby dziesiętne
        $zmienna6 = 123456.123;
        echo($zmienna6.'<br>');

        // zapis naukowy
        $zmienna8 = -0.5E32;
        echo($zmienna8)
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Typ string</h3>
    <?php
        // znaki apostrofów
        $zmienna9 = 123456.123;
        echo('$zmienna9'.'<br>');
        // znaki cudzysłowów
        $zmienna10 = 016.12;
        echo("$zmienna10<br>")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h2>Typy złożone</h2>
    <?php 
        echo('Typ <tt>array</tt>');
        echo('Typ <tt>object</tt>');
    ?>
    <hr>
    <h2>Typy specjalne</h2>
    <?php 
        echo('null, resource')
    ?>
    <?php
        echo("<br><br>")
    ?>
    <?php 
        echo('Typ <tt>null<tt>');
        echo('<br>');
        $zmiennaPusta = null;
        var_dump($zmiennaPusta);
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Sprawdzanie typu zmiennej</h3>
    <?php 
        echo var_dump('<a href="typy_zmiennych.php">typy_zmiennych.php</a>')
        
    ?>
    <?php
        echo("<br><br>")
    ?>
    <?php 
        echo var_dump('<a href="zmienne2.php">zmienne2.php</a>')
    ?>
</body>
</html>