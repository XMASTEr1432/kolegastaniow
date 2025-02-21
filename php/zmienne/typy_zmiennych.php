<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Typy zmiennych</title>
</head>
<body>
    <h1>PHP - Typy zmiennych</h1>
    <h3>Sprawdzanie typów zmiennych</h3>
    <?php 
        $zmienna1 = 'Są czarni';
        echo($zmienna1).'<br>';
        echo gettype($zmienna1).'<br><br><br>';

        echo (is_bool($zmienna1)).'<br>';
        echo intval(is_bool($zmienna1)).'<br>';
        echo(is_string($zmienna1)).'<br>';
        echo intval(is_null($zmienna1)).'<br>';
        echo intval(is_float($zmienna1)).'<br>';
        echo intval(is_int($zmienna1)).'<br>';
        echo intval(is_numeric($zmienna1)).'<br>';

        echo('<br>');

        echo('---A---'.'<br>');

        $zmienna1 = intval($zmienna1);
        echo($zmienna1).'<br>';
        echo gettype($zmienna1).'<br>';
        $zmienna1 = strval($zmienna1);
        echo($zmienna1).'<br>';
        echo gettype($zmienna1).'<br>';
        echo('<br>');

        echo settype($zmienna1, 'bool').'<br>';
        echo gettype($zmienna1).'<br>';
        echo is_bool($zmienna1).'<br>';

    ?>
    <br>
    <?php 
        echo('---B---')
    ?>
    <br>
    <br>
    <?php
        echo(intval('ff',16))     
    ?>
    <br>
    <br>
    <?php echo('---C---') ?>
    <br>
    <?php 
        $zmienna21 = 321;
        echo (isset($zmienna21));
        echo('<br>');
        echo((int)empty($zmienna21));
        echo('<br>');
        echo((bool)($zmienna21));
        echo('<br>');
    ?>
</body>
</html>