<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_skrypty1</title>
</head>
<body>
    <h1>PHP - skrypty</h1>

    <h3>nazwa ćwiczenia: php_skrypty1, czas: 1 lekcja, waga: 3</h3>
    <h3>Bieżąca polska data</h3>

    <?php 
        $data = [
            date('l'),
            date('d'),
            date('M'),
            date('Y'),
            date("h:i:sa")
        ];
        echo("<b>Bieżąca polska data:</b> ");
        echo('<br>');
        
        $dzienTygodnia = [
            'Monday'=>"Poniedziałek",
            'Tuesday'=>"Wtorek",
            'Wednesday'=>"Środa",
            'Thursday'=>"Czwartek",
            'Friday'=>"Piątek",
            'Saturday'=>"Sobota",
            'Sunday'=>"Niedziela"
        ];

        $miesiac = [
            "Jan" => "Stycznia",
            "Feb" => "Lutego",
            "Mar" => 'Marzec',
            "Apr" => 'Kwiecień',
            "May" => 'Maj',
            "Jun" => 'Czerwiec',
            "Jul" => 'Lipiec',
            "Aug" => 'Sierpień',
            "Sep" => 'Wrzesień',
            "Oct" => 'Październik',
            "Nov" => 'Listopad',
            "Dec" => 'Grudzień'
        ];

        echo $dzienTygodnia[$data[0]].'-'.$data[1].'-'.$miesiac[$data[2]].'-'.$data[3].' '.$data[4];
    ?>
    <h3>
        Wypisać liczby w zakresie od do podanym w formularzu w kolejności malejącej, bez podzielnych przez 6
    </h3>
    <form action="" method="get">
        <label for="liczba1">
            liczba1 (od) <br>
            <input type="number" name="liczba1" id="liczba1">
        </label><br>
        <label for="liczba2">
            liczba1 (do) <br>
            <input type="number" name="liczba2" id="liczba2">
        </label>
        <br>
        <input type="submit" value="Wyślij">
    </form>

    <?php 
        $liczba1 = @$_GET['liczba1'];
        $liczba2 = @$_GET['liczba2'];

        if ($liczba1 != "" || $liczba2 != "") {
            for ($i=$liczba2; $i >= $liczba1; $i--) {
                if ($i % 6 != 0) {
                    echo $i.'<br>';
                }
            }
        }
    ?>
    <h3>Wyświetlanie plików z bieżącego katalogu</h3>

    <?php 
        $files = scandir(".");

        foreach ($files as $f) {
            echo "$f <br>";
        }
    ?>
    <h3>Wypisać poniżej formularza zawarte w nim dane</h3>

    <form action="" method="get">
        <label for="imie">Imię: <input type="text" name="imie" id="imie"></label><br>
        <label for="nazwisko">Nazwisko: <input type="text" name="nazwisko" id="nazwisko"></label><br>
        <label for="wiek">Wiek: <input type="number" name="wiek" id="wiek"></label><br>
        <input type="submit" value="Wyślij">
        <input type="reset" value="Wyczyść">
    </form>

    <?php 
        $imie = @$_GET['imie'];
        $nazwisko = @$_GET['nazwisko'];
        $wiek = @$_GET['wiek'];

        echo "Imię: $imie <br>";
        echo "Nazwisko: $nazwisko <br>";
        echo "Wiek: $wiek <br>";
    ?>
</body>
</html>