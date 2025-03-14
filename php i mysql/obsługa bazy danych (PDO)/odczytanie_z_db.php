<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa bazy danych (PDO)</title>
</head>
<body>
    <h1>PHP - obsługa bazy danych (PDO)</h1>

    <h3>Odczytanie rekordów z bazy danych</h3>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=baza_testowa", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            echo 'Połączono z bazą danych: baza_testowa <br>';
            echo '<b>Wszystkie rekordy z bazy danych: baza_testowa</b><br>';
            $stmt = $conn->prepare("SELECT * FROM osobaa");
            $stmt->execute(); 
            echo '<table>
            <tr>
            <td><b>ID</b></td>
            <td><b>Imię</b></td>
            <td><b>Nazwisko</b></td>
            <td><b>Rok urodzenia</b></td>
            <td><b>Miejsce urodzenia</b></td>
            </tr>
            ';
            while ($row = $stmt->fetch()) {
                echo '<tr>';
                echo '<td>'.$row['id']."</td>";
                echo '<td>'.$row['imie']."</td>";
                echo '<td>'.$row['nazwisko']."</td>";
                echo '<td>'.$row['rok']."</td>";
                echo '<td>'.$row['miasto']."</td>";
                echo '</tr>';
            }
            echo '</table>';

            
        } catch (PDOException $th) {
            echo 'Nie udało się połączyć z bazą danych. Powód błędu: '.$th->getMessage();
        }

        $conn = null;
    ?>
</body>
</html>