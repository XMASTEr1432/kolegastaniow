<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - składnia</title>
</head>
<body>
    <h1>PHP - składnia</h1>

    <?php
        echo("PHP jest obiektowym interpretowanym skryptowym językiem programowania o <b>słabej kontroli</b> typów danych.")
    ?>

    <?php
        echo("<hr>")
    ?>
    

    <!--  -->

    <?php
     EchO("PHP nie rozróżnia wielkosci liter w funckcjach ale lepiej tak nei psiac!!!")
    ?>

    <hr>

    <?php
        print("print i echo nie sąfunkcjami, jest to \"konstrukcja językowa\" - w uproszczeniu instrukcje <br>");

        print( "print zwraca wartość logiczną 1 <br>");
        print( "na ogół strosuje się \'echo(\'\')\''");

        print nl2br("Błędy wyświetlane \n są na ekranie <br>");
    ?>
    <hr>
    <?php
        /*
        komentarz blokowy
        */

        // komentarz jednowierszowy

        # komentarz jednowierszowy
    ?>

    <?php
        include("skladnia_a.php")
    ?>

    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        require("skladnia_b.php")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        // plik skladnia_c.php nie jest dostępny
        include("skladnia_c.php");
        echo("<br>")
    ?>

    <?php
        echo("Brak pliku wywołanego instrukcją <tt>include</tt> wywołuje ostrzeżenie")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        // plik skladnia_d.php nie jest dostępny
        // require("skladnia_d.php");
        // echo("<br>")
    ?> 

    <?php
        echo("plik skladnia_d.php nie jest dostępny <br>");
        echo("brak pliku wywołanego funkcją <tt>require</tt> powoduje wstrzymania ładowania treści strony oraz skryptu i wyświetlenie błędu")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        require("skladnia_e.html")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        require("skladnia_f.txt")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <?php
        include("skladnia_g.inc")
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <div>
        Jedno zdanie przynajmniej żeby było napisane w divie tak o bo takie polecenie <br> nie wiem po co to pewnie żeby dać include z błędem/ostrzeżeniem czy cuś 
    </div>
</body>
</html>