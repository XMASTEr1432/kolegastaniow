<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $kolorki = array("czarny", "normalny", "żółty");

        foreach ($kolorki as $x):
            if ($x == 'normalny') {
                echo "<h1>biały</h1> <br>";
            }
            else {
                echo "<h1>$x</h1> <br>";
            };
        endforeach;

        // math
        echo(pi());
        echo('<br>');
        echo(rand());
        echo('<br>');
        // definiowanie
        define("NIGGER", "<h1>Miłego dnia życzę!</h1>");
        echo NIGGER;
    ?>
    <h3>Formularz</h3>
    <?php 
        $tekst = @$_GET['tekst'];
    ?>
    <form action="" method="get">
        <input type="text" name="tekst" id="tekst" value="<?php echo("$tekst"); ?>">
        <input type="submit" value="Wyślij">
    </form>
    <?php 
        echo("Wpisany tekst to: $tekst"); 
    ?>
    <h3>Podnoszenie do kwadratu</h3>
    <form action="" method="get">
        <input type="number" name="cyfra" id="cyfra">
        <input type="submit" value="Wyślij">
    </form>
    <?php 
        $cyfra = @$_GET['cyfra'];
        echo("Wpisana cyfra to: $cyfra");
        echo('<br>');
        $cyfraDoKwadratu = $cyfra <=0 ? null : $cyfra ** 2;
        echo("Cyfra podniesiona do kwadratu do: $cyfraDoKwadratu")
    ?>
    <h3>Podnoszenie do potęgi</h3>
    <form action="" method="get">
        <input type="number" name="cyfra1" id="cyfra1">
        <input type="number" name="cyfra2" id="cyfra2">
        <input type="submit" value="Wyślij">
    </form>
    <?php 
        $cyfra1 = @$_GET['cyfra1'];
        $cyfra2 = @$_GET['cyfra2'];
        $cyfra3 = $cyfra1 <= 0 || $cyfra2 <=0 ? null :$cyfra1**$cyfra2;
        echo("Pierwsza cyfra to: $cyfra1 <br>");
        echo("Druga cyfra to: $cyfra2 <br>");
        echo("Cyfra $cyfra1 podniesiona do $cyfra2 potęgi wynosi: $cyfra3");
    ?>
    <h3>Reszta z dzielenia</h3>
    <form action="" method="get">
        <input type="number" name="liczba1" id="liczba1">
        <input type="number" name="liczba2" id="liczba2">
        <input type="submit" value="Wyślij">
    </form>
    <?php 
        $liczba1 = @$_GET['liczba1'];
        $liczba2 = @$_GET['liczba2'];
        $liczba3 = $liczba1 <= 0 || $liczba2 <= 0 ? null : $liczba1/$liczba2;
        $liczba3 = $liczba1 <= 0 || $liczba2 <= 0 ? null : $liczba1%$liczba2;
        echo ("Pierwsza liczba to: $liczba1 <br>");
        echo("Druga liczba to: $liczba2 <br>");
        echo "Liczba $liczba1 podzielona przez liczbę $liczba2 to: $liczba3 <br>";
        echo "Reszta z dzielenia to: ";
    ?>
    
    <script>
        
    </script>

</body>
</html>