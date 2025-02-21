<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - funkcje</title>
</head>
<body>
    <h1>PHP - funkcje</h1>
    <h3>Definiowanie funkcji</h3>

    <?php 
        function nazwaFunkcji ()
        {
            // instrukcje funkcji
        }

        nazwaFunkcji(); # wywołanie funkcji
    ?>
    <br><br>

    <?php 
        function prostaFunkcja()
        {
            echo '2 * 2 = 4 '." Czy to prawda? "."Sprawdźmy: ";
            $a = 2;
            $b = 2;
            $c = $a * $b;
            echo "<br>";
            echo("2*2 = ".$c);
        }

        prostaFunkcja();

        echo "<br><br>";
    ?>
    <?php 
        prostaFunkcja();
    ?>
    <h3>Funkcja z argumentami (przyjmowanie argumentów przez funkcję)</h3>
    <?php 
        function funkcjaArgumenty($arg1, $arg2, $arg3)
        {
            echo "Zdanie można złożyć ze zmiennych dzięki konkatenacji argumentów: "."<br>";
            echo $arg1.$arg2.$arg3;
        }

        funkcjaArgumenty("Ala "," ma "," kota");
        echo "<br>";
        funkcjaArgumenty("Kota ", " ma "," Ala");
    ?>
    <h3>Zwracanie wartości przez funkcję</h3>
    <?php 
        function funkcjaArgumenty2 ($arg1, $arg2, $arg3, $arg4)
        {
            $arg4 = $arg1." ".$arg2." ".$arg3." ".$arg4;
            return $arg4;
        }

        $arg5 = funkcjaArgumenty2("Nam","strzelać","nie","kazano!");
        echo($arg5);
        echo "<br><br>";
    ?>
</body>
</html>