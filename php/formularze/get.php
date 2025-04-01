<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formularze</title>
</head>
<body>
    <h1>PHP - Formularze: metoda GET</h1>

    <h3></h3>
    <form action="" method="get">
        <input type="text" name="pole1" id="pole1">
        <input type="text" name="pole2" id="pole2">
        <input type="submit" value="Wyślij zapytanie">
    </form>

    <?php 
        // sposób obecny - globalna tablica $_GET
        $zmienna1 = $_GET['pole1'];
        echo("Wartość pola pole1 to: $zmienna2".'<br>');
        echo('<br>');
    ?>
    <hr>
    <?php 
        if (isset($_GET)) {
            var_dump($_GET);
            echo('<br>');
        }
    ?>
    <hr>
    <form action="" method="get">
        <input type="radio" name="radio1" value="opcja1">opcja1 <br>
        <input type="radio" name="radio1" value="opcja2">opcja2 <br>
        <input type="radio" name="radio1" value="opcja3">opcja3 <br>
        <input type="submit" value="Wyślij">
    </form>

    <?php 
        if (!isset($_GET['radio1'])) {
            echo("Proszę zaznaczyć jedną z opcji");
        }
        else
        {
            echo("Zaznaczona opcja to: ".$_GET['radio1']);
        }
    ?>
</body>
</html>