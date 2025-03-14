<?php 
    $login = @$_GET['login'];
    $password = @$_GET['password'];

    if (!$db_lnk = @mysqli_connect("localhost", "root", "")) {
        echo('Wystąpił błąd próby połączenia z serwerem MySQLi...<br>');
        echo("</body></html>");
        exit;
    }

    if (!@mysqli_select_db($db_lnk, "baza_testowa")) {
        @mysqli_close();
        echo("Wystąpił błąd podczas wyboru bazy danych: baza_testowa <br>");
        echo("</body></html>");
        exit;
    }

    $query = 'SELECT * FROM users';

    if (!$result = mysqli_query($db_lnk, $query)) {
        @mysqli_close($db_lnk);
        echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
        echo('</body></html>');
        exit;
    }
    
    $konta = mysqli_fetch_array($result);

    
    
?>
<?php 
    if(!mysqli_close($db_lnk))
    {
        echo("Wystąpił błąd podczas zamykania połączenia z serwerem MySQLi...<br>");
        exit;
    }
?>