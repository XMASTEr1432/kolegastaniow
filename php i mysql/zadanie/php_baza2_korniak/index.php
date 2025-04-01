<?php 
include('strona.html');
    if (@$_GET['wyloguj'] == 1) {
        setcookie('login', 'zalogowany', time() - 3600, '/');
        header("Location: index.php");
    }
    if (!isset($_COOKIE['login'])) {
        include('logowanie.html');
        if (@trim(@$_POST['login']) == 'user1' && @trim(@$_POST['haslo']) == 'pass1') {
            setcookie('login', 'zalogowany',time() + 3600, '/');
            header("Location: index.php");
        }
        else{
            echo '<span style="color:red">*Błędny login lub hasło<span>';
        }
    }
    if (isset($_COOKIE['login'])) {
        include('formularz.html');

        $nazwaSerwera = "localhost";
        $user = "root";
        $haslo = "";
        $nazwaBazyDanych = "baza2";

        $conn = mysqli_connect($nazwaSerwera, $user, $haslo, $nazwaBazyDanych);

        if (!$conn) {
            die("Błąd łączenia z bazą danych");
        }
        $query = "SELECT * FROM baza2";
        $wynik = mysqli_query($conn, $query);
        echo '<h3>Pełna lista rekordów w tabeli: </h3>';

        if (mysqli_num_rows($wynik) > 0) {
            echo("<table>");
            echo"<tr>
            <th>zwierze</th>
            <th>imie</th>
            <th>wiek</th>
            <th>kolor</th>
            <th>waga</th>
            </tr>";
            while($row = mysqli_fetch_assoc($wynik)) {
                echo("<tr>");
                echo "<td>".$row["zwierze"]."</td>";
                echo "<td>".$row["imie"]."</td>";
                echo "<td>".$row["wiek"]."</td>";
                echo "<td>".$row["kolor"]."</td>";
                echo "<td>".$row["waga"]."</td>";
                echo("</tr>");
            }
            echo("</table>");
        } else {
        echo "brak danych w tabeli baza2";
        }
    }
    

    $zwierze = @$_POST['zwierze'];
    $imie = @$_POST['imie'];
    $wiek = @$_POST['wiek'];
    $kolor = @$_POST['kolor'];
    $waga = @$_POST['waga'];

    @$zwierze = trim(ucfirst(strtolower(htmlspecialchars($zwierze))));
    @$imie = trim(ucfirst(strtolower(htmlspecialchars($imie))));
    @$kolor = trim(strtolower(htmlspecialchars($kolor)));

    if (isset($zwierze) && $zwierze != '') {
            $patternLiczba = "/[a-z]/";
            if(isset($wiek) && $wiek != "" && ((preg_match_all($patternLiczba,$wiek)) == 0))
            {
                if (isset($waga) && $waga != "" && ((preg_match_all($patternLiczba,$waga)) == 0)) {
                    $query = "INSERT INTO baza2 (zwierze, imie, wiek, kolor, waga) VALUES ('".$zwierze."', '".$imie."', '".$wiek."', '".$kolor."', '".$waga."')";

                    if (mysqli_query($conn, $query)) {
                        echo 'pomyślnie dodano rekordy';
                        header("Location: index.php");
                    }
                }
            }
    }
    $usun = @$_GET['usun'];
    if (isset($usun) && $usun != '') {
        $poleDoUsuniecia = trim(ucfirst(strtolower(htmlspecialchars($usun))));
        $query = "SELECT * FROM baza2 WHERE zwierze = '".$poleDoUsuniecia."'";
        mysqli_query($conn, $query);
        if (mysqli_num_rows($wynik) > 0) {
            $query = "DELETE FROM baza2 WHERE zwierze = '".$poleDoUsuniecia."'";   
            mysqli_query($conn, $query); 
        }
        header("Location: index.php");
    }
    $kryteria = @$_GET['kryteria'];
    $wartosc = @$_GET['wartosc'];
    echo '<hr>';
    if($kryteria != 'default' && $kryteria != '')
    {
        if (@trim($wartosc) == '' && $kryteria != 'wagawieksza' && $kryteria != 'wagamniejsza' && $kryteria != 'wiekmniejszy' && $kryteria != 'wiekwiekszy') {
            $query = "SELECT * FROM baza2 ORDER BY $kryteria";
            if (isset($conn)) {
                $wynik = mysqli_query($conn, $query);
                echo '<h3>Wynik wyszukiwania: </h3>';
                if (mysqli_num_rows($wynik) > 0) {
                    echo("<table>");
                    echo"<tr>
                    <th>zwierze</th>
                    <th>imie</th>
                    <th>wiek</th>
                    <th>kolor</th>
                    <th>waga</th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($wynik)) {
                        echo("<tr>");
                        echo "<td>".$row["zwierze"]."</td>";
                        echo "<td>".$row["imie"]."</td>";
                        echo "<td>".$row["wiek"]."</td>";
                        echo "<td>".$row["kolor"]."</td>";
                        echo "<td>".$row["waga"]."</td>";
                        echo("</tr>");
                    }
                    echo("</table>");
                } else {
                echo "brak danych w tabeli baza2";
                }
            }
        }
        else 
        {
            switch ($kryteria) {
                case 'zwierze':
                    $query = "SELECT * FROM baza2 WHERE zwierze ='".$wartosc."'";
                    break;
                case 'imie':
                    $query = "SELECT * FROM baza2 WHERE imie ='".$wartosc."'";
                    break;
                case 'wiek':
                    $query = "SELECT * FROM baza2 WHERE wiek ='".$wartosc."'";
                    break;
                case 'kolor':
                    $query = "SELECT * FROM baza2 WHERE kolor ='".$wartosc."'";
                    break;
                case 'waga':
                    $query = "SELECT * FROM baza2 WHERE waga ='".$wartosc."'";
                    break;
                case 'wagawieksza':
                    $query = "SELECT * FROM baza2 WHERE waga > 100";
                    break;
                case 'wagamniejsza':
                    $query = "SELECT * FROM baza2 WHERE waga < 100";
                    break;
                case 'wiekwiekszy':
                    $query = "SELECT * FROM baza2 WHERE wiek > 5";
                    break;
                case 'wiekmniejszy':
                    $query = "SELECT * FROM baza2 WHERE wiek < 5";
                    break;
                default:
                    $query = "SELECT * FROM baza2";
                    break;
            }
            $wynik = mysqli_query($conn, $query);
            echo '<h3>Wynik wyszukiwania: </h3>';
            if (mysqli_num_rows($wynik) > 0) {
                echo("<table>");
                echo"<tr>
                <th>zwierze</th>
                <th>imie</th>
                <th>wiek</th>
                <th>kolor</th>
                <th>waga</th>
                </tr>";
                while($row = mysqli_fetch_assoc($wynik)) {
                    echo("<tr>");
                    echo "<td>".$row["zwierze"]."</td>";
                    echo "<td>".$row["imie"]."</td>";
                    echo "<td>".$row["wiek"]."</td>";
                    echo "<td>".$row["kolor"]."</td>";
                    echo "<td>".$row["waga"]."</td>";
                    echo("</tr>");
                }
                echo("</table>");
            } else {
            echo "brak danych w tabeli baza2";
            }

        }
    }
    function bladWiek(){
        $patternLiczba = "/[a-z]/";
        if (isset($wiek) && $wiek != "" && ((preg_match_all($patternLiczba,$wiek)) != 0)) {
            return '<span style="color:red">*Błąd przy wpisanym wieku</span>';
        }
    }

    if (isset($conn)) {
        mysqli_close($conn);
    }
    echo('</body></html>');
?>