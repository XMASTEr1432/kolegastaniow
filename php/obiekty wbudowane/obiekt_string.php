<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ciągi znaków</title>
</head>
<body>
    <h1>PHP - ciągi znaków (obiekt string)</h1>
    <?php 
        // z cudzysłowami i apostrofami
        $liczba = 100;
        $ciag_znakow1 = "Ala ma kota w ilości $liczba";
        $ciag_znakow2 = "Ala ma kota w ilości \$liczba";
        $ciag_znakow3 = 'Ala ma kota w ilości $liczba';

        // heredoc
        $ciag_znakow4 = <<<"ID1"
        liczba niewolników w ilości $liczba, 
        dodatkowo jest też jeden ching chong
ID1;
        echo("$ciag_znakow1"."<br>");
        echo("$ciag_znakow2"."<br>");
        echo("$ciag_znakow3"."<br>");
        echo("$ciag_znakow4"."<br>");
        echo nl2br("$ciag_znakow4"."<br>");
        
        // nowdoc 
        $ciag_znakow5 = <<<'ID1'
        liczba niewolników niestety zmienszyła się o $liczba,
        ale dalej jest jeden ching chong
ID1;
        echo nl2br("$ciag_znakow5"."<br>");
    ?>
    <hr>
    <h3>Formatowanie ciągów znaków</h3>
    <?php 
        $wartosc = 77.123456789;
        echo("Wartość formatowanej zmiennej to $wartosc".'<br>');
        printf("formatowanie ciągu znaków %%b = %b", $wartosc); #binarnie
        echo("<br>");
        printf("formatowanie ciągu znaków %%c = %c", $wartosc); #ascii
        echo("<br>");
        printf("formatowanie ciągu znaków %%d = %d", $wartosc);
        echo("<br>");
        printf("formatowanie ciągu znaków %%u = %u", $wartosc);
        echo("<br>");
        printf("formatowanie ciągu znaków %%f = %f", $wartosc);
        echo("<br>");
        printf("formatowanie ciągu znaków %%o = %o", $wartosc); #liczba ósemkowa
        echo("<br>");
        printf("formatowanie ciągu znaków %%s = %s", $wartosc);
        echo("<br>");
        printf("formatowanie ciągu znaków %%x = %x", $wartosc);
        echo("<br>");
        printf("formatowanie ciągu znaków %%X = %X", $wartosc);
        echo("<br>");

        echo('<br><br>');
        // printf("%'03",$wartosc);
        echo("<br>");
        printf("%'_-3d",$wartosc);
        echo("<br>");
        printf("%.2f",$wartosc);
        echo("<br>");
        printf("%'09.3f",$wartosc);
        echo("<br>");
    ?>
    <hr>
    <?php 
        $ciag_znakow20 = "aLa mA kOta";
        echo("Ciąg znaków oryginalny: $ciag_znakow20".'<br><br>');
        echo('strtolower($ciag_znakow20):'.strtolower($ciag_znakow20).'<br>');
        echo('strtolower($ciag_znakow20):'.strtoupper($ciag_znakow20).'<br>');
        echo('strtolower($ciag_znakow20):'.ucfirst($ciag_znakow20).'<br>');
        echo('strtolower($ciag_znakow20):'.ucwords($ciag_znakow20).'<br>');
    ?>
    <hr>
    <h3>Usuwanie białych znaków</h3>
    <?php 
        $str = "   ... _Przykładowy ciąg_ ...   ";
        echo("Pierowatna zawartość ciągu str: <br> -$str-");
        $str = ltrim($str);
        echo('<br>Po wywołaniu ltrim ($str):<br>'."-$str-");
        $str = rtrim($str);
        echo('<br>Po wywołaniu rtrim ($str):<br>'."-$str-");
        $str = trim($str, "._ ");
        echo('<br>Po wywołaniu trim ($str,"._ "):<br>'."-$str-");
    ?>
    <h3>zamiana znaków w ciągu</h3>
    <?php 
        $ciag_znakow21 = str_replace("%imie%", "Tola", "%imie% ma kota");
        echo($ciag_znakow21);
    ?>

    <hr>
    <?php 
        $ciag1 = array("%imie1%", "%imie2%");
        $ciag2 = array("Ala","Ola");

        $ciag = str_replace($ciag1, $ciag2, "%imie1% ma kota. %imie2% ma psa.");
        echo($ciag.'<br>');
    ?>
    <hr>
    <?php 
        $ciag = str_replace($ciag1, "Magda", "%imie1% ma kota. %imie2% ma psa.");
        echo("$ciag <br>");
    ?>
    <hr>
    <h3>Porównywanie ciągów znaków</h3>
    <?php 
        $string1 = "abcdefghijklmnopqrstuwxyz";
        $string2 = "ABCDEFGHIJKLMNOPQRSTUWXYZ";

        $string = strcmp($string2, $string1);
        echo("$string <br>");
        $string = strcasecmp($string2, $string1);
        echo("$string <br>");
        $string = strncmp($string2, $string1, 10);
        echo("$string <br>");
        $string = strncasecmp($string2, $string1, 4);
        echo("$string <br>");
        $string = strnatcmp($string2, $string1);
        echo("$string <br>");
        $string = strnatcasecmp($string2, $string1);
        echo("$string <br>");
    ?>
    <h3>Maskowanie znaków specjalnych - <i>htmlspecialchars</i></h3>

    <?php 
        $str = "<b>Ala ma kota</b>";

        echo htmlspecialchars("$str");
    ?>
</body>
</html>