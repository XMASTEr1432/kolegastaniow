<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa danych (PDO)</title>
</head>
<body>
    <?php 
        $id = @$_GET['id'];
        $imie = @$_GET['imie'];
        $nazwisko = @$_GET['nazwisko'];
        $rok = @$_GET['rok'];
        $miasto = @$_GET['miasto'];
        if (isset($id) || isset($imie) || isset($nazwisko)) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=baza_testowa", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO osobaa VALUES ('$id', '$imie', '$nazwisko', '$rok', '$miasto')");
                $stmt->execute();
                echo 'wykonano panie';
                
            } catch (PDOException $th) {
                echo 'Nie udało się połączyć z bazą danych. Powód błędu: '.$th->getMessage();
            }

            $conn = null;
        }
    ?>
</body>
</html>