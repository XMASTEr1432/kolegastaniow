<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - obsługa baz danych</title>
</head>
<body>
    <?php 
        if (!isset($_GET['id']) || !isset($_GET['imie']) || !isset($_GET['nazwisko']) || !isset($_GET('rok')) || !isset($_GET['miasto;'])) {
            exit('Brak danych. </body></html>');
        }
        if ($_GET['id'] == '' || $_GET('nazwisko') == '' || $_GET['nazwisko'] =='' || $_GET['rok'] =='' || $_GET['miasto'] == '')  {
            exit("Brkaaaaaaak danych.");
        }

        $id = $_GET['id'];
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $rok = $_GET['rok'];
        $miasto = $_GET['miasto'];


    ?>
</body>
</html>