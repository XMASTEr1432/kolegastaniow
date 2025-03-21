<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_tablicelosowe</title>
</head>
<body>
    <h1>Ćwiczenie: php_tablicelosowe</h1>

    <h3>Proszę napisać skrypt, który pokazuje na ekranie trzy (3) losowo wybrane zdjęcia, umieszczone w katalogu, wykorzystując do tego obiek array</h3>
    <h3>Czas na wykonanie ćwiczenia: ok. 15 minut, waga 3</h3>

    <?php 
        $obrazy = [
            "<img src='obrazy/wizyta_01.jpg' alt='obraz1'>",
            "<img src='obrazy/wizyta_02.jpg' alt='obraz2'>",
            "<img src='obrazy/wizyta_03.jpg' alt='obraz3'>",
            "<img src='obrazy/wizyta_04.jpg' alt='obraz4'>",
            "<img src='obrazy/wizyta_05.jpg' alt='obraz5'>",
            "<img src='obrazy/wizyta_06.jpg' alt='obraz6'>",
            "<img src='obrazy/wizyta_07.jpg' alt='obraz7'>",
            "<img src='obrazy/wizyta_08.jpg' alt='obraz8'>",
            "<img src='obrazy/wizyta_09.jpg' alt='obraz9'>",
            "<img src='obrazy/wizyta_10.jpg' alt='obraz10'>",
            "<img src='obrazy/wizyta_11.jpg' alt='obraz11'>",
            "<img src='obrazy/wizyta_12.jpg' alt='obraz12'>",
            "<img src='obrazy/wizyta_13.jpg' alt='obraz13'>",
            "<img src='obrazy/wizyta_14.jpg' alt='obraz14'>",
            "<img src='obrazy/wizyta_15.jpg' alt='obraz15'>",
            "<img src='obrazy/wizyta_16.jpg' alt='obraz16'>"
        ];
        for ($i=0; $i < 3; $i++) { 
            $rand = rand(0, 15);
            echo ' '.$obrazy[$rand];
        }
    ?>
</body>
</html>