<?php 
    setcookie("ciasteczkoZnika", "poof", time()+10);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - kontrola ciasteczek czy coś pewnie</title>
</head>
<body>
    <h1>Obsługa serwera WWW w PHP - ciasteczka</h1>
    <?php 
        echo("<br>Ciasteczko ala ma kota<br>")
    ?>
</body>
</html>