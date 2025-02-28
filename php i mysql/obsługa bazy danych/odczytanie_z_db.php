<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa bazy danych</title>
</head>
<body>
    

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

        $query = 'SELECT * FROM osobaa';

        if (!$result = mysqli_query($db_lnk, $query)) {
            @mysqli_close($db_lnk);
            echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
            echo('</body></html>');
            exit;
        }
        
    ?>
    <h1>PHP - obsługa bazy danych</h1>
    <br>
    <h3>mysqli_fetch_row</h3>
    <table style="border: 1px solid black">
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Rok urodzenia</th>
            <th>Miejsce urodzenia</th>
        </tr>
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
    <br><br><br><hr><br><br><br>
    <h3>mysqli_fetch_array</h3>
    <?php
        $query2 = 'SELECT * FROM osobaa';

        if (!$result2 = mysqli_query($db_lnk, $query2)) {
            @mysqli_close($db_lnk);
            echo("Wystąpił błąd: nieprawidłowe zapytanie...<br>");
            echo('</body></html>');
            exit;
        }
    ?>
    <table style="border: 1px solid red">
        <tr>
            <th>ID2</th>
            <th>Imię2</th>
            <th>Nazwisko2</th>
            <th>Rok urodzenia2</th>
            <th>Miejsce urodzenia2</th>
        </tr>
        <?php 
            while ($row2 = mysqli_fetch_array($result2)) {
                echo("<tr>");
                echo("<td>{$row2['id']}</td>");
                echo("<td>{$row2['imie']}</td>");
                echo("<td>{$row2['nazwisko']}</td>");
                echo("<td>{$row2['rok']}</td>");
                echo("<td>{$row2['miasto']}</td>");
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