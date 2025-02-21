<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $plik = fopen("plik.txt", "r") or die ("unable to open file!");
        $plikWrite = fopen("plik.txt", "a") or die ("unable to open file!");
        fwrite($plikWrite, "Ala ma korzeń. Korzeń ma drewno.<br>");
        while (!feof($plik)) {
            echo fgets($plik). "<br>";
        }

        // echo(fread($plik, filesize("plik.txt")));
        fclose($plik);
    ?>
</body>
</html>