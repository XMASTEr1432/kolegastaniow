<?php 
    session_start();
    $_SESSION["zmienna_sesji"] = "afroamerykanin";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - sesje</title>
</head>
<body>
    <h1>Obsługa serwera WWW w PHP - sesje</h1>
    <div>
        Witamy na stronie. Została rozpoczęta sesja. <br>
        Identyfikatorem sesji jest: <?php echo session_id(); ?> <br>
        Została ustawiona zmienna o nazwie: zmienna_sesji <br>
        Wartością zmiennej zmienna_sesji jest: <?php echo $_SESSION['zmienna_sesji']; ?> <br>
        
        <a href="sesjapliki2.php">Następna strona</a>
    </div>
</body>
</html>