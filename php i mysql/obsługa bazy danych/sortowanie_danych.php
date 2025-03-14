<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa bazy danych</title>
</head>
<body>
    <h1>PHP - obsługa bazy danych</h1>
    <h3>Sortowanie danych</h3>

    <?php 
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

        if (isset($_GET['sortid'])) {
            $sortid = $_GET['sortid'];
        } else {
            $sortid = 1;
        }

        switch ($sortid) {
            case 1:
                $sortColumn = "id";
                break;
            
            case 2:
                $sortColumn = "imie";
                break;
            
            case 3:
                $sortColumn = "nazwisko";
                break;
            
            case 4:
                $sortColumn = "rok";
                break;
            
            case 5:
                $sortColumn = "miasto";
                break;
            
            
            default:
                $sortColumn = "id";
                break;
        }

        $query = "SELECT * FROM osobaa ORDER BY $sortColumn";

        if (!$result = mysqli_query($db_lnk, $query)) {
            @mysqli_close($db_lnk);
            echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
            echo('</body></html>');
            exit;
        }

        
    ?>
    <table>
        <td><a href="sortowanie_danych.php?sortid=1">ID</a></td>
        <td><a href="sortowanie_danych.php?sortid=2">Imię</a></td>
        <td><a href="sortowanie_danych.php?sortid=3">Nazwisko</a></td>
        <td><a href="sortowanie_danych.php?sortid=4">Rok urodzenia</a></td>
        <td><a href="sortowanie_danych.php?sortid=5">Miejsce urodzenia</a></td>
    </table>

    <table>
        <?php 
            while ($row = mysqli_fetch_row($result)) {
                echo("<tr>");
                echo("<td>$row[0]</td>");
                echo("<td>$row[1]</td>");
                echo("<td>$row[2]</td>");
                echo("<td>$row[3]</td>");
                echo("<td>$row[4]</td>");
                echo("</tr>");
            }
        ?>
    </table>

    <?php 
        if(!mysqli_close($db_lnk))
        {
            echo("Wystąpił błąd podczas zamykania połączenia z serwerem MySQLi...<br>");
            exit;
        }
    ?>
</body>
</html>