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
    <h1>php_baza1</h1>

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
            <input type="text" name='imie' id='imie' required>
        </label><br>
        <label for="nazwisko">nazwisko <br>
            <input type="text" name='nazwisko' id='nazwisko' required>
        </label><br>
        <label for="wiek">wiek <br>
            <input type="text" size='2' maxlength='2' name='wiek' id='wiek' required> <?php echo sprawdzenie(); ?>
        </label><br>
        <label for="miasto">miasto <br>
            <input type="text" name='miasto' id='miasto' required>
        </label><br>
        <label for="kodmiasta">kod miasta <br>
            <input type="text" name='kodmiasta' id='kodmiasta' size='6' maxlength='6' required>
        </label><br>
        <label for="email">email <br>
            <input type="text" name='email' id='email' required>
        </label><br><br>
        <input type="submit" value="Wyślij">
    </form>
        <h3>2. Wyświetlenie na ekranie zawartości bazy danych</h3>
        <h3>3. Sortowanie bazy danych wg nazwiska lub wieku</h3>
    <?php 
        

        function sprawdzenie()
        {
            $wiek = @$_GET['wiek'];
            $patternWiek = "/[a-z]/";
            if(isset($wiek) && $wiek != "")
            {   
                if ((preg_match_all($patternWiek,$wiek))) {
                    return("Wiek musi składać się tylko z 2 liczb!");
                    die();
                }
            }
        }
        function sprawdzenieEmail()
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return null;
            } else {
                return 'Źle zapisany email!';
            }
        }
        
        
    ?>

    <?php 
        $nazwaSerwera = "localhost";
        $user = "root";
        $haslo = "";
        $nazwaBazyDanych = "baza1";
        $kodmiasta = @$_GET['kodmiasta'];
        $imie = @$_GET['imie'];
        $nazwisko = @$_GET['nazwisko'];
        $miasto = @$_GET['miasto'];

        $email = @$_GET['email'];

        $conn = mysqli_connect($nazwaSerwera, $user, $haslo, $nazwaBazyDanych);

        if (!$conn) {
            die("Błąd łączenia z bazą danych");
        }
        if (isset($imie) && $imie != "") {
            $wiek = @$_GET['wiek'];
            $patternWiek = "/[a-z]/";
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(isset($wiek) && $wiek != "" && ((preg_match_all($patternWiek,$wiek)) == 0))
                {   
                    $query = "INSERT INTO baza1(imie, nazwisko, wiek, miasto, kodmiasta, email) VALUES ('".$imie."','".$nazwisko."','".$wiek."','".$miasto."','".$kodmiasta."','".$email."')";

                    if (mysqli_query($conn, $query)) {
                        echo "Pomyślnie dodano rekordy";
                    }
                    else{
                        echo 'Wystąpił błąd przy wysłaniu rekordów do tabeli';
                    }
                }
            }
        }
        
        
    ?>
    
    <div id='wynik'>
        <?php 
            $query = "SELECT * FROM baza1";
            $sortid = @$_GET['sortid'];
            if ($sortid == 1) {
                $query = "SELECT * FROM baza1 ORDER BY nazwisko ASC";
            }
            if ($sortid == 2) {
                $query = "SELECT * FROM baza1 ORDER BY wiek ASC";
            }
            $wynik = mysqli_query($conn, $query);

            if (mysqli_num_rows($wynik) > 0) {
                echo("<table>");
                echo"<tr>
                <th>imie</th>
                <th><a href='php_baza1_korniak.php?sortid=1'>nazwisko</a></th>
                <th><a href='php_baza1_korniak.php?sortid=2'>wiek</a></th>
                <th>miasto</th>
                <th>kodmiasta</th>
                <th>email</th>
                </tr>";
                while($row = mysqli_fetch_assoc($wynik)) {
                    echo("<tr>");
                    echo "<td>".$row["imie"]."</td>";
                    echo "<td>".$row["nazwisko"]."</td>";
                    echo "<td>".$row["wiek"]."</td>";
                    echo "<td>".$row["miasto"]."</td>";
                    echo "<td>".$row["kodmiasta"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo("</tr>");
                }
                echo("</table>");
            } else {
            echo "brak danych w tabeli baza1";
            }

            

            
        ?>
    </div>

    

    <?php 
        mysqli_close($conn);
    ?>

</body>
</html>