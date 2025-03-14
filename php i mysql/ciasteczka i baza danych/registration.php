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

    $query = "INSERT INTO users (login, password) VALUES ('$login', '$password')";

    if (!$result = mysqli_query($db_lnk, $query)) {
        @mysqli_close($db_lnk);
        echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
        echo('</body></html>');
        exit;
    }
    var_dump($result);
    
?>
<?php 
    if(!mysqli_close($db_lnk))
    {
        echo("Wystąpił błąd podczas zamykania połączenia z serwerem MySQLi...<br>");
        exit;
    }
?>
<script>
    setTimeout(() => {
        window.location = 'index.php';
    }, 2);
</script>