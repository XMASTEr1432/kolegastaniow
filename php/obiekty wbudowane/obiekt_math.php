<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obiekt math()</title>
</head>
<body>
    <!-- PRACA WŁASNA -->
    <h1>PHP - obiekt math()</h1>
    <h3><tt>pi()</tt></h3>
    <?php 
        echo("Funkcja pi() zwraca liczbę &Pi; (dosyć sensowne). <br>");
        echo(pi());
    ?>
    <h3>Funkcja <tt>min()</tt> i funkcja <tt>max()</tt></h3>
    <?php 
        $tablica = array(0, 10, 20, 30, 40, 50);

        echo("\$tablica ma wartości: ");
        var_dump($tablica);
        echo("<br>");
        echo("Najmniejsza wartość w tablicy to: ".min($tablica).'<br>');
        echo("Największa wartość w tablicy to: ".max($tablica));
    ?>
    <h3>Funkcja <tt>abs()</tt></h3>
    <p>Funkcja <tt>abs()</tt> zwraca wartość absolutną liczby.</p>
    <?php 
        echo("abs(-2) => ".abs(-2));
    ?>
    <h3>Funckcja <tt>sqrt()</tt></h3>
    <p>Pierwiastek liczby 😑</p>
    <?php 
        echo("sqrt(4) => ".sqrt(64))
    ?>
    <h3>Funckcja <tt>round()</tt></h3>
    <?php 
        echo("round(2.40) => ".round(2.40).'<br>');
        echo("round(2.60) => ".round(2.60));
    ?>
    <h3>Funkcja <tt>rand()</tt></h3>
    <?php 
        echo(rand().'<br>');
        echo("Aby kontrolować zakres losowych liczb - rand(x, y)"."<br>"."Losowa liczba w zakresie od 2 do 64: ".rand(2, 64));
    ?>
</body>
</html>