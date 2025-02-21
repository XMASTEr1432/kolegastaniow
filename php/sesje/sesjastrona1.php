<?php 
    session_start();
    if(!isset($_SESSION['strona1_wizyty']))
    {
        $_SESSION['strona1_wizyty'] = 0;
    }
    else
    {
        $_SESSION['strona1_wizyty']++;
    }
    if (!isset($_SESSION['strona2_wizyty'])) {
        $_SESSION['strona2_wizyty'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - sesja</title>
</head>
<body>
    <h1>Obsługa serwera WWW w PHP - sesje</h1>
    <div>
        <?php 
            echo "Liczba wizyt na pierwszej stronie: ".$_SESSION['strona1_wizyty'].'<br>';
            echo "Liczba wizyt na drugiej stronie: ".$_SESSION['strona2_wizyty'].'<br>';
        ?>
        <a href="sesjastrona2.php">Druga strona</a>
    </div>
</body>
</html>