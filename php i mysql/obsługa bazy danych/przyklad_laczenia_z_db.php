<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa baz danych</title>
</head>
<body>
    <h1>PHP - obsługa bazy danych</h1>

    <?php 
        if (!$db_lnk = mysqli_connect("localhost", "root", "")) {
            echo('Wystąpił błąd podczas próby łączenia z serwerem MySQLi... <br>');
            exit; #die;
        }
        else
        {
            echo('Połączenie z serwerem baz danych zostało nawiązane... <br>');
        }
        
        if (!mysqli_select_db($db_lnk, "baza_testowa")) {
            echo("Wystąpił błąd podczas wyboru bazy danych: baza_testowa <br>");
        }
        else
        {
            echo("Została wybrana baza danych: baza_testowa <br>");
        }
        if (!mysqli_close($db_lnk)) {
            echo('Wystąpił błąd podczas zamykania połączenia z serwerem MySQLi');
        }
        else
        {
            echo('Połączenie z serwerem MySQLi zostało zamknięte');
        }
        
    ?>
</body>
</html>