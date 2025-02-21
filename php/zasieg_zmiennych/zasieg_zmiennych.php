<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zasięg zmiennych</title>
</head>
<body>
    <h1>PHP - Zasięg zmiennych</h1>
    <h3>Zasięg zmiennych - zmienne lokalne</h3>

    <?php
        $zmiennaGlob = 7;

        function zakresZmiennych()
        {
            echo "Zmienna \$zmiennaGlob ma wartość $zmiennaGlob".'<br>';
        }
        zakresZmiennych();
        echo "ZZZZZmienna \$zmiennaGlob ma wartość $zmiennaGlob".'<br>';
    ?>
    <br><br><hr>
    <h3>Zasięg zmiennych - zmienna superglobalna z tablicy $GLOBALS</h3>
    <?php
        $zmiennaGlob2 = 3;
        function zakresZmiennych2 ()
        {
            $zmiennaPomoc2 = $GLOBALS['zmiennaGlob2'];

            echo("Zmiennaaaa \$zmiennaGlob2 ma wartość: ");
            echo($zmiennaPomoc2.'<br>');

            echo("Zmienna \$zmiennaGlob2 ma wartość: $zmiennaPomoc2".'<br>');
        }

        zakresZmiennych2();

        echo("Zmieeeeeeeeeeenna \$zmiennaGlob ma wartość: $zmiennaGlob2".'<br>');
    ?>
    <br><br><hr>
    <h3>Zasięg zmiennych - słowo kluczowe global</h3>
    <?php
        $zmiennaGlob4 = 44;
        function zakresZmiennych4()
        {
            global $zmiennaGlob4;
            echo "Zmienna \$zmiennaGlob4 ma wartość: $zmiennaGlob4".'<br>';
        }
        zakresZmiennych4();
    ?>
    <br><br><hr>
    <h3>Zasięg zmiennych - zmienne lokalne</h3>
    <?php
        function zakresZmiennych5()
        {
            $zmiennaGlob5 = 22222;
            echo "Zmienna \$zmiennaGlob5 ma wartość: $zmiennaGlob5".'<br>';
        }
        zakresZmiennych5();
        echo "Zmienna \$zmiennaGlob5 ma wartość: $zmiennaGlob5".'<br>';
    ?>
    <br><br><hr>
    <h3>Zasięg zmiennych - zmienne superglobalne (autoglobals, auto-globals)</h3>
    <?php
        function test()
        {
            // zmienna w obrębie funkcji - lokalna
            $var1 = "zmienna lokalna";
            // superglobalna $GLOBALS pozwala na dostęp do zmiennej spoza funkcji
            echo nl2br('var1 w zakresie globalnym '.$GLOBALS["var1"]."\n");
            // tak użyta zmienna pobiera wartość zmiennej z obrębu funkcji
            echo nl2br('$var1 w zakresie lokalnym'.$var1."\n");
        }
        // zmienna poza funkcją - globalna
        $var1 = "zmienna globalna";

        test();
    ?>
</body>
</html>