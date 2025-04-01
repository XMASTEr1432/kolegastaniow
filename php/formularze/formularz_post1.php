<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - formualrze POST</title>
</head>
<body>
    <h1>PHP - formularze POST</h1>
    <h3>Wysyłanie plików - upload</h3>

    <form enctype="multipart/form-data" name="formularz1" action="formularz_post2.php" method="post">
        Nazwa pliku:
        <input type="file" name="plik1" id="plik1" size="30">
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>