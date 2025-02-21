<?php 
    if (!isset($_COOKIE['visited'])) {
        setcookie("visited", "tak");
        $str = "Cookie o nazwie visited nie jest ustawione.";
    }
    else
    {
        $str = "Cookie o nazwie visited jest ustawione. ";
        $str .= "Jego wartość to: {$_COOKIE['visited']}";
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ciasteczka</title>
</head>
<body>
    <h1>Obsługa serwera WWW w PHP - ciasteczka</h1>
    <?php 
        echo("$str");
    ?>
</body>
</html>