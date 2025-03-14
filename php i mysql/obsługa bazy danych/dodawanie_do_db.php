<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa baz danych</title>
</head>
<body>
    <?php 
        if (!isset($_GET['id']) || !isset($_GET['imie']) || !isset($_GET['nazwisko']) || !isset($_GET('rok')) || !isset($_GET['miasto'])) {
            exit('Brak danych. </body></html>');
        }
        if ($_GET['id'] == '' || $_GET('imie') == '' || $_GET['nazwisko'] =='' || $_GET['rok'] =='' || $_GET['miasto'] == '')  {
            exit("Brkaaaaaaak danych. </body></html>");
        }

        $id = $_GET['id'];
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $rok = $_GET['rok'];
        $miasto = $_GET['miasto'];

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

        $query = "INSERT INTO osobaa VALUES('$id', '$imie', '$nazwisko', '$rok', '$miasto')";

        if (!$result = mysqli_query($db_lnk, $query)) {
            @mysqli_close($db_lnk);
            echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
            echo('</body></html>');
            exit;
        }

        $rowsNo = mysqli_affected_rows($db_lnk);

        echo("Liczba dodanych rekordów: $rowsNo <br>");
        if(!mysqli_close($db_lnk))
        {
            echo("Wystąpił błąd podczas zamykania połączenia z serwerem MySQLi...<br>");
            exit;
        }
    ?>
</body>
</html>