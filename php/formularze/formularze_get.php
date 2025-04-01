<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP - formularze</h1>
    <?php 
        $wojew = $_GET['nazwa'];
        echo("Wartość pola Województwo to: $wojew <br>");
        echo("<br>");
    ?>
</body>
</html>