<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_baza1</title>
    <style>
        table, tr, td, th{
            border: 1px, solid, black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>php_baza1_pdo</h1>
    <h3>Do wykonania zadania należy wykorzystać tryb obiektowy pdo</h3>
    <p>Treść zadania: <br>
    Utowrzyć bazę danych <br>
    DB - baza1, T - baza1 <br>
    imie - tylko litery <br>
    nazwisko - tylko litery <br>
    wiek - 2 cyfry <br>
    miasto - tylko litery <br>
    kod miasta - wg schematu XX-XXX, wpis formatowany automatycznie <br>
    email - typowy adres email <br>
    </p>
    <p>
    <b>Polecenia</b><br>
    <h3>1. Możliwość dodania osoby</h3>
    </p>
    <form action="" method='get'>
        <h2>Dodawanie rekordów do tabeli:</h2>
        <label for="imie">imie <br>
            <input type="text" name='imie' id='imie' required> <?php echo sprawdzenieLitera1(); ?>
        </label><br>
        <label for="nazwisko">nazwisko <br>
            <input type="text" name='nazwisko' id='nazwisko' required> <?php echo sprawdzenieLitera2(); ?>
        </label><br>
        <label for="wiek">wiek <br>
            <input type="text" size='2' maxlength='2' name='wiek' id='wiek' required> <?php echo sprawdzenie(); ?>
        </label><br>
        <label for="miasto">miasto <br>
            <input type="text" name='miasto' id='miasto' required> <?php echo sprawdzenieLitera3(); ?>
        </label><br>
        <label for="kodmiasta1">kod miasta <br>
            <input type="text" name='kodmiasta1' id='kodmiasta1' size='2' maxlength='2' required>
        </label>-
        <label for="kodmiasta2">
            <input type="text" name='kodmiasta2' id='kodmiasta2' size='3' maxlength='3' required> <?php echo sprawdzenie2(); ?>
        </label><br>
        <label for="email">email <br>
            <input type="text" name='email' id='email' required> <?php echo sprawdzenieEmail(); ?>
        </label><br><br>
        <input type="submit" value="Wyślij">
    </form>
        <h3>2. Wyświetlenie na ekranie zawartości bazy danych</h3>
        <h3>3. Sortowanie bazy danych wg nazwiska lub wieku</h3>
    <?php 
        function sprawdzenieLitera1() {
            $imie = @$_GET['imie'];
            $patternCyfry = "/[0-9]/";
            if(isset($imie) && $imie != "")
            {   
                if ((preg_match_all($patternCyfry,$imie))) {
                    return("<span style='color:red'>* Pole powinno składać się z samych liter!</span>");
                    die();
                }
            }
        }
        function sprawdzenieLitera2() {
            $nazwisko = @$_GET['nazwisko'];
            $patternCyfry = "/[0-9]/";
            if(isset($nazwisko) && $nazwisko != "")
            {   
                if ((preg_match_all($patternCyfry,$nazwisko))) {
                    return("<span style='color:red'>* Pole powinno składać się z samych liter!</span>");
                    die();
                }
            }
        }
        function sprawdzenieLitera3() {
            $miasto = @$_GET['miasto'];
            $patternCyfry = "/[0-9]/";
            if(isset($miasto) && $miasto != "")
            {   
                if ((preg_match_all($patternCyfry,$miasto))) {
                    return("<span style='color:red'>* Pole powinno składać się z samych liter!</span>");
                    die();
                }
            }
        }

        function sprawdzenie()
        {
            $wiek = @$_GET['wiek'];
            $patternWiek = "/[a-z]/";
            if(isset($wiek) && $wiek != "")
            {   
                if ((preg_match_all($patternWiek,$wiek))) {
                    return("<span style='color:red'>* Wiek musi składać się tylko z 2 liczb!</span>");
                    die();
                }
            }
            
        }
        function sprawdzenie2() {
            $kodmiasta1 = @$_GET['kodmiasta1'];
            $kodmiasta2 = @$_GET['kodmiasta2'];
            $kodmiastaPattern = "/[a-z]/";
            if(isset($kodmiasta1) && $kodmiasta1 != "" && isset($kodmiasta2) && $kodmiasta2 != "")
            {   
                if ((preg_match_all($kodmiastaPattern,$kodmiasta1))) {
                    return("<span style='color:red'>* Kod miasta musi składać się tylko z liczb! (pierwsza kolumna)</span>");
                    die();
                }
                if ((preg_match_all($kodmiastaPattern,$kodmiasta2))) {
                    return("<span style='color:red'>* Kod miasta musi składać się tylko z liczb! (druga kolumna)</span>");
                    die();
                }
            }
        }
        function sprawdzenieEmail()
        {
            $email = @$_GET['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return null;
            } else {
                return "<span style='color:red'>*Źle zapisany email!</span>";
            }
        }
        
        
    ?>

    <?php 
        $nazwaSerwera = "localhost";
        $user = "root";
        $haslo = "";
        $nazwaBazyDanych = "baza1";
        $kodmiasta = @$_GET['kodmiasta1'].'-'.@$_GET['kodmiasta2'];
        $imie = @$_GET['imie'];
        if ($imie != '') {
            $imie = ucfirst($imie);
        }
        $nazwisko = @$_GET['nazwisko'];
        if ($nazwisko != '') {
            $nazwisko = ucfirst($nazwisko);
        }
        $miasto = @$_GET['miasto'];
        if ($miasto != '') {
            $miasto = ucfirst($miasto);
        }

        $email = @$_GET['email'];

        try {
        $conn = new PDO("mysql:host=$nazwaSerwera;dbname=$nazwaBazyDanych", $user, $haslo);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($imie) && $imie != "") {
            $wiek = @$_GET['wiek'];
            $patternWiek = "/[a-z]/";
            $kodmiasta1 = @$_GET['kodmiasta1'];
            $kodmiasta2 = @$_GET['kodmiasta2'];
            $kodmiastaPattern = "/[a-z]/";
            $patternCyfry = "/[0-9]/";
            $blad = false;
            if (((preg_match_all($patternWiek,$wiek)) == 0) && ((preg_match_all($patternCyfry,$imie)) == 0) && ((preg_match_all($patternCyfry,$miasto)) == 0) && ((preg_match_all($patternCyfry,$nazwisko)) == 0) && ((preg_match_all($kodmiastaPattern,$kodmiasta1)) == 0) && ((preg_match_all($kodmiastaPattern,$kodmiasta2)) == 0)) {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if(isset($wiek) && $wiek != "")
                    {   
                        $query = "INSERT INTO baza1(imie, nazwisko, wiek, miasto, kodmiasta, email) VALUES ('".$imie."','".$nazwisko."','".$wiek."','".$miasto."','".$kodmiasta."','".$email."')";

                        $conn->exec($query);
                        echo "Pomyślnie dodano rekordy";
                    }
                }
            }
        }
        
        } catch(PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
        }
        $conn = null;
        
        
        
    ?>
    
    <div id='wynik'>
        <?php 

            echo "<table>"; 
            echo"<tr>
            <th>imie</th>
            <th><a href='php_baza1_pdo_korniak.php?sortid=1'>nazwisko</a></th>
            <th><a href='php_baza1_pdo_korniak.php?sortid=2'>wiek</a></th>
            <th>miasto</th>
            <th>kodmiasta</th>
            <th>email</th>
            </tr>";
            $query = "SELECT * FROM baza1";
            $sortid = @$_GET['sortid'];

            if ($sortid == 1) {
                $query = "SELECT * FROM baza1 ORDER BY nazwisko ASC";
            }
            if ($sortid == 2) {
                $query = "SELECT * FROM baza1 ORDER BY wiek ASC";
            }
            try {
            $conn = new PDO("mysql:host=$nazwaSerwera;dbname=$nazwaBazyDanych", $user, $haslo);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $data = $conn->query($query)->fetchAll();
            foreach ($data as $row) {
                echo("<tr>");
                echo "<td>".$row["imie"]."</td>";
                echo "<td>".$row["nazwisko"]."</td>";
                echo "<td>".$row["wiek"]."</td>";
                echo "<td>".$row["miasto"]."</td>";
                echo "<td>".$row["kodmiasta"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo("</tr>");
            }
            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";

            
        ?>
    </div>

    

    <?php 
        
    ?>

</body>
</html>