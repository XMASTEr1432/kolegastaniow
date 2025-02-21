<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Wyłamywanie się ze struktury skryptu</h3>

    <?php
    $liczba = 110;

    if($liczba < 13)
    {
        echo("Wskazana liczba jest mniejsza od 13");
    }
    // exit;
    // exit();
    // exit('Koniec skryptu');
    // die('Koniec skryptu');

    if($liczba > 13);
    {
        echo("Wskazana liczba jest większa od 13");
    }
    ?>

     <!-- <h4>Korzytstanie z formularzy</h4>

    <form method="GET">
        <input type="text" name="nazwa">
        <input type="submit" value="Wyślij żądanie">
    </form>

    <?php
        $zmienna = @$_GET['nazwa'];

        echo($zmienna);
    ?> -->

    <h3>Instrukcja switch...case...</h3>

    <form action="" method="get">
        <label for="pole1">Zgadnij, jaka to liczba</label>
        <input type="text" name="pole1" >
        <input type="submit" value="Wyślij">
    </form>
    <?php
        $zmienna2 = @$_GET['pole1'];
        switch($zmienna2)
        {
            case 10:
                echo('$zmienna2 = 10');
                break;
            case 25:
                echo('$zmienna2 = 25');
                break;
            case 50:
                echo('$zmienna2 = 50');
                break;
            default:
                echo('To jest jakaś dziwna zmienna 🤨');
        }
    ?>
    <form action="" method="get">
        <label for="pole2">Podaj nazwę warzywa</label>
        <input type="text" name="pole2" id="">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        $zmienna3 = @$_GET['pole2'];

        $zmienna_wynik = match ($zmienna3) {
            "pomarańcze","kiwi","banany" => "owoce południowe",
            "bataty","taro","yam-yam" => "warzywa egzotyczne",
            "czereśnie","jabłka","śliwki" => "polskie owoce",
            "kapusta","ziemniaki","brukiew" => "polskie warzywa",
            // "czarnuch","nigger","nigga" => "narzędzia",
            // "kot","pies" => "chińskie jedzenie",
            default => "nie znam tej rośliny"
        };
        echo($zmienna_wynik);
    ?>
    <form action="" method="get">
        <label for="pole3a">Podaj login i hasło</label>
        <input type="text" name="pole3a" id="">
        <input type="text" name="pole3b" id="">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        $login = @$_GET['pole3a'];
        $haslo = @$_GET['pole3b'];

        $loginWzor = "admin";
        $hasloWzor = "admin";

        $wynikPowitanie = @match (($login === $loginWzor) && ($haslo === $hasloWzor)) {
            true => "Masz prawo do dostępu 😊",
            false => "Masz zabroniony dostęp! 😡",
        };
        echo($wynikPowitanie);
    ?>
</body>
</html>