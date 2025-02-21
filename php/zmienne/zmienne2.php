<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - zmienne, stałe i superglobalne</title>
</head>
<body>
    <h1>PHP - zmienne, stałe i superglobalne</h1>
    <?php 
        echo('Ala ma kota'.'<br>');
        $zmienna45 = 159;
        echo $zmienna45;
    ?>
    <h3>Stałe predefiniowane (stałe, magiczne)</h3>
    <?php 
        // phpinfo();
        echo(PHP_OS.'<br>');
        // echo(php_os.'<br>');
        echo(PHP_VERSION.'<br>');
        echo(PHP_OS_FAMILY.'<br>');
        echo(PHP_INT_SIZE.'<br>');
        echo(PHP_INT_MIN.'<br>');
        echo(PHP_INT_MAX.'<br>');
        echo(PHP_FLOAT_MIN.'<br>');
        echo(PHP_FLOAT_MAX.'<br>');

        echo('<br>');

        // stałe magiczne - Magic constants

        echo(__FILE__.'<br>');
        echo(__LINE__.'<br>');
        echo(__DIR__.'<br>');
    ?>
    <?php
        echo("<br><br>")
    ?>
    <hr>
    <h3>Definiowanie zmiennych stałych</h3>
    <?php 
        define('BIGNUMBER', '123456789');
        echo (BIGNUMBER.'<br>');
        const LITTLENUM = 321; # Poza funkcjami i klasami
        echo(LITTLENUM.'<br>');


        $LITTLENUM = 123;
        echo(LITTLENUM.'<br>');
        echo("<b>$LITTLENUM</b>".'<br>'.'<br>');

        const LITTLENUM = 987;
        echo(LITTLENUM)
    ?>
    <h3>superglobalne</h3>
    <?php 

        echo('$GLOBALS, $_SERVER, $_GET, $_POST, $_COOKIE, $_SESSION, $_FILES, $_ENV, $_REQUEST'.'<br><br><br>');

        echo($_SERVER['HTTP_ACCEPT'].'<br>');
        echo($_SERVER['TMP'].'<br>');
        echo($_SERVER['SERVER_SIGNATURE']);

        var_dump($_SERVER);
        var_dump($GLOBALS)
    ?>
    <h3>superglobalne pętla</h3>
    <?php 
        foreach($_SERVER AS $klucz => $wartosc)
        {
            echo($klucz.'--------'.'<br>');
        }
    ?>
    <?php
        echo("<br><br>")
    ?>
    <?php 
        var_dump($GLOBALS)
    ?>

    <h3>$_ENV</h3>
    <?php 
        $arrrEnv=getenv();
        foreach($arrrEnv as $key=>$val1);
        echo("$key=>$val1"."<br>");
    ?>
</body>
</html>