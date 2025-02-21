<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - tablice</title>
</head>
<body>
    <h1>PHP - tablice</h1>

    <?php 
        $kolory = array("czerwony", "zielony", "niebieski");
        echo "\$kolory[0] = ", $kolory[0], "<br>";
        echo "\$kolory[1] = ", $kolory[1], "<br>";
        echo "\$kolory[2] = ", $kolory[2], "<br>";
        
        echo "<br>";

        var_dump("\$kolory[0] = ", $kolory[0], "<br>");
        echo "<br><br>";

        for ($i=0; $i < 3; $i++) { 
            echo $kolory[$i], "<br>";
        }

        echo "<br><br>";
        
        foreach ($kolory as $kolor) {
            echo $kolor, "<br>";
        }

        echo "<br><br>";

        echo $kolory[0]." ".$kolory[1]." ".$kolory[2];
    ?>
    <h3>Tablica dwa</h3>
    <?php 
        $kolory = array();
        $kolory[0] = "czerwony";
        $kolory[1] = "#123456";
        $kolory[2] = "rgb(123, 147, 159)";

        echo $kolory[0].", ".$kolory[1].", ".$kolory[2];

        // echo (var_dump($kolory));
    ?>
    <h3>Tablica trzy</h3>
    <?php 
        $kolory = array();
        $kolory[0] = "buraczkowy";
        $kolory[1] = "#123456";
        $kolory[2] = "rgb(123, 147, 159)";

        // pierwotne kolory
        for ($i=0; $i < 3; $i++) { 
            echo $kolory[$i], "<br>";
        }
        echo "<hr>";

        // kolory po zmianie
        $kolory[0] = "rgb(23, 65, 98)";
        $kolory[1] = "yellow";
        $kolory[2] = "#ab23f5";

        for ($i=0; $i < 3; $i++) { 
            echo $kolory[$i]."<br>";
        }
        
    ?>
    <h3>Tablice asocjacyjne</h3>

    <?php 
        $kolory = array(
            "kolor1" => "bladoniebieski",
            "kolor2" => "ok",
            "kolor3" => "ine"
        );

        echo $kolory["kolor1"].", ".$kolory["kolor2"].", ".$kolory["kolor3"]."<br><br>";

        foreach($kolory as $kolor)
        {
            echo $kolor."<br>";
        }

        echo "<br><br>";

        foreach ($kolory as $klucz => $kolor) {
            echo "\$kolory: $klucz = $kolor <br>";
        };
    ?>
    <h3>Operacje na tablicach</h3>
    <?php 
        $kolory = array("czerwony", "#123456", "rgb(123, 147, 159)");

        $colors = array(
            "color1" => "niebieski",
            "color2" => "#fedcba",
            "color3" => "rgb(77, 111, 222)"
        );

        echo ("$kolory[0]"."<br>");
        echo ("{$colors['color3']}");
    ?>
    <h3>Ustalanie rozmiaru</h3>
    <?php 
        $tablica = array(1, 2, 3, 4, 5, 6);
        echo ("Długość/wielkość tablicy wynosi ".count($tablica)."<br>");
        
        $rozmiar = count($tablica);
        for ($i=0; $i < $rozmiar; $i++) { 
            echo $tablica[$i]." ";
        };
    ?>
    <h3>Sortowanie tablic indeksacyjnytch</h3>
    <?php 
        $tablica1 = array(1, 7, 4, 3, 5, 6 ,2);
        $tablica2 = array('g', 'Tola', 7, 'tola', "b", 123, "a");

        echo ("Zawartośc tablicy wyprzed sortowaniem:<br>");

        sort($tablica1);
        ksort($tablica1);
        rsort($tablica2);

        echo "Zawartość tablicy po sortowaniu </br>";
        foreach($tablica as $wartosc)
        {
            echo "$tablica ma wartość $wartosc <br>";
        }
    ?>
    <h3>Sowrowaanie tabliv asosjacyjnych</h3>
    <?php 
        $tab = array(
            "index1" =>5,
            "index2" => 1,

            "index9"=> 6
        );
        $tablica1 = array(1, 7, 4, 3, 5, 6 ,2);
        $tablica2 = array('g', 'Tola', 7, 'tola', "b", 123, "a");

        echo "Zawartośc tablicy wyprzed sortowaniem:<br>";

        sort($tablica1);
        ksort($tablica1);
        rsort($tablica2);

        echo "Zawartość tablicy po sortowaniu </br>";
        foreach($tablica as $klucz => $wartosc)
        {
            echo "$tablica ma wartość $wartosc <br>";
        }
    ?>
    <h3>explode</h3>

    <?php 
        $ciag1 = "słoń, jednoroec, żyrafa";
        var_dump($ciag1);
        echo "<br>";
        $ciag2 = explode(", ", $ciag1);
        var_dump($ciąg2);

        echo "<br><br>";
    ?>
</body>
</html>