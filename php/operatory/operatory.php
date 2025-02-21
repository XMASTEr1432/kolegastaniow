<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - operatory</title>
</head>
<body>
    <h1>PHP - operatory</h1>
    <h3>Operatory arytmetyczne</h3>
    <?php  
        $zmienna1 = (5+12-4*23/5%2)**4;
        echo ("Wartość zmiennej \$zmienna1 to: $zmienna1 <br>")
    ?>
    <hr>
    <h3>Operatory logiczne</h3>
    <?php  
        $liczba1 = true;
        $liczba2 = true;

        $liczba3 = ($liczba1 and $liczba2);
        echo($liczba3);
        echo('<br>');
        $liczba4 = ($liczba1 && $liczba2);
        echo($liczba4);
        echo('<br>');
        echo ('Operatory logiczne: and, or, xor, !, &&, ||')
    ?>
    <hr>
    <h3>Operatory przypisywania</h3>
    <?php  
        echo ('Operatory przypisania: =, +=, itd...');
    ?>
    <br><br><hr>
    <h3>Operatory porównania (relacyjne)</h3>
    <?php  
        echo('Operatory porównania: ==, !=, ===, >, ...');
    ?>
    <br><br><hr>
    <h3>Operatory inkrementacji/dekrementacji</h3>
    <?php  
        echo('Operatory inkrementacji/dekrementacji: x++, itd...')
    ?>
    <br><br><hr>
    <h3>Operatory referencji &amp;</h3>
    <?php
        $a = 5;
        $b = $a;

        echo $a.'<br>'; //5 
        echo $b.'<br>'; //5 

        echo '<hr>';

        $a = 7;

        echo $a.'<br>'; // 7
        echo $b.'<br>'; // 5

        echo '<hr>';

        $a = 55;
        $b = &$a;

        echo '$a: '.$a.'<br>'; // 55
        echo '$b: '.$b.'<br>'; // 55

        echo '<hr>';

        $a = 777;

        unset ($a);

        echo '$a: '.$a.'<br>';
        echo '$b: '.$b.'<br>';

        echo ((int)isset($a)/*!!!*/.'<br><br>');
    ?>
    <hr>
    <h3>Operator tłumienia/kontroli błędów @</h3>
    <?php
        $a = 999;
        
        unset ($a);
        echo('$a: '.$a.'<br>');
        echo @('$a: '.$a.'<br>');

        // php.ini track_errors

        echo '';
    ?>
    <hr>
    <h3>Operatory tablicowe</h3>
    <?php
        echo('Operator łączenia tablic'.'<br>');
        echo('Operator indexowania tablic ');
        echo('nazwa_tablicy[index] = wartość'.'<br>');
        echo('Operator porównywania tablic ');
        echo('Operatory: ==, ===, ...');
    ?>
    <hr>
    <h3>Operator łańcuchowy</h3>
    <?php
        echo('Konkatenacja odbywa się za pomocą znaku <b>.</b> czyli kropki :)')
    ?>
    <hr>
    <h3>Operator warunkowy</h3>
    <?php
        $zmienna12 = 120;

        echo (($zmienna12 < 200 && $zmienna12%2==0)? ('Mała liczba parzysta'):('Liczba jest jakaś dziwna :|'));
    ?>
    <br><br><hr>
    <h3>Przykład z var_dump</h3>

    <?php
        $aaaa = 'kłaniam się pięknie dzięki za odsłuch';

        echo(var_dump("ala").'<br>');
        echo(var_dump(0xff).'<br>');
        echo(var_dump("045").'<br>');
        echo(var_dump(045).'<br>');
        echo(var_dump($aaaa).'<br>');
        echo(var_dump('$aaaa').'<br>');
    ?>
    <br><br>
</body>
</html>