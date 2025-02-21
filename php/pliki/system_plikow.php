<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - system plików</title>
</head>
<body>
    <h1>PHP - system plików</h1>
    <h3>Odczytanie pliku</h3>
    <?php 
        $nazwaPliku = "plik.txt";
        if (file_exists($nazwaPliku)) {
            echo("Wskazany plik istnieje!");
        }
    ?>
    <hr>
    <h3>Sprawdzenie wielkości pliku</h3>
    <?php 
        $nazwaPliku = "plik.txt";
        echo("Wielkość pliku o nazwie $nazwaPliku to: ".filesize($nazwaPliku)."B");
    ?>
    <hr>
    <h3>Wyświetlanie zawartości pliku</h3>
    <?php 
        $nazwaPliku = "plik.txt";
        if (is_file($nazwaPliku)) {
            $plik = fopen($nazwaPliku, "r");

            $zawartosc = fread($plik, filesize($nazwaPliku));
            echo $zawartosc;
            fclose($plik);
        }
        else
            exit("Brak wskazanego pliku!");
    ?>
    <hr>
    <h3>Wpisanie do pliku</h3>
    <?php 
        $plik = fopen("plik.txt", "w");
        fwrite($plik, "As to pies Ali , a kot jest z <b>Polski</b>.");

        echo(readfile("plik.txt"));
        
        fclose($plik);
    ?>
    <hr>
</body>
</html>