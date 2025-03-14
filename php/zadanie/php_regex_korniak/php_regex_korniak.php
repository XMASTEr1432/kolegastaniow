<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_regex_korniak</title>
</head>
<body>
    <h1>php_regex</h1>

    <form action="" method="get">
        <label for="imie">Imię:</label>
        <input type="text" name="imie" id="imie" required><br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko" required><br>
        <label for="wiek">Wiek:</label>
        <input type="number" name="wiek" id="wiek" required><br>
        <label for="ulica">Ulica:</label>
        <input type="text" name="ulica" id="ulica" required><br>
        <label for="numer-domu" >Numer domu:</label>
        <input type="number" name="numer-domu" id="numer-domu" required><br>
        <label for="numer-mieszkania">Numer mieszkania (opcjonalne):</label>
        <input type="number" name="numer-mieszkania" id="numer-mieszkania"><br>
        <label for="kod-pocztowy">Kod pocztowy:</label>
        <input type="text" maxlength = "2" size="2"name="kod-pocztowy" class="kod-pocztowy" required> - <input type="text" maxlength="3" size="3" name="kod-pocztowy2" class="kod-pocztowy2" required><br>
        <label for="miasto">Miasto:</label>
        <input type="text" name="miasto" id="miasto" required><br>
        <label for="woje">Wybierz swoje województwo:</label>
        <select name="woje" id="woje">
            <option value="default">Wybierz województwo</option>
            <option value="dolnośląskie">dolnośląskie</option>
            <option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
            <option value="lubelskie">lubelskie</option>
            <option value="łódzkie">łódzkie</option>
            <option value="małopolskie">małopolskie</option>
            <option value="mazowieckie">mazowieckie</option>
        </select><br>
        <label for="plec">Płeć:</label><br>
        <input type="radio" name="plec" id="male" value="mężczyzna">mężczyzna<br>
        <input type="radio" name="plec" id="female" value="kobieta">kobieta<br>
        <input type="submit" value="Wyślij">
    </form>


    <?php 
        $imie = @$_GET['imie'];
        $nazwisko = @$_GET['nazwisko'];
        $wiek = @$_GET['wiek'];
        $wiek = (int) $wiek;
        $ulica = @$_GET['ulica'];
        $nrdom = @$_GET['numer-domu'];
        $nrdom = (int) $nrdom;
        $nrmiesz = @$_GET['numer-mieszkania'];
        $nrmiesz = (int) $nrmiesz;
        $kodpocz = @$_GET['kod-pocztowy'];
        $kodpocz .= '-'.@$_GET['kod-pocztowy2'];
        $miasto = @$_GET['miasto'];
        $woje = @$_GET['woje'];
        $plec = @$_GET['plec'];


        if (isset($imie)) {
            echo "<h3>$imie $nazwisko</h3>";
            echo "<b>$plec, $wiek lat <br></b>";
            echo "<b>Zamieszkały:</b> <br> ul. $ulica $nrdom $nrmiesz<br>";
            echo "$kodpocz $miasto <br>";
            echo "woj. $woje <br>";
            echo "POLSKA";
        }
    ?>
</body>
</html>