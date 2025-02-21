<?php 
    session_start(); # można pominąć o ile włączona na serwerze jest opcja auto_start (●'◡'●)
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - sesje</title>
</head>
<body>
    <h1>Obsługa serwera WWW w PHP - ciasteczka</h1>
    <h3>Sesje</h3>

    <?php 
        if (!isset($_SESSION['licznik'])) {
            // jeśli zmiennna nie jest zajerestrowana
            $_SESSION['licznik'] = 0;
            // przypisz jej początkową wartość
        }
        else
        {
            // jeśli jest zarejestrowana
        }
    ?>
</body>
</html>