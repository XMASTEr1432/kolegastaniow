<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - formularze</title>
</head>
<body>
    <?php 
        $uploaddir = './';

        // $_FILES to tablica globalna w której zapisane jest pole z wcześniejszego formularza
        // $_FILES['plik1']['name']
        if ($_FILES['plik1']['error'] == UPLOAD_ERR_OK) {
            // reakcjha na błędy pliku
            // katalog, w którym zapisane sąokiki doączony jest do nazwy pliku
            $new_name = $uploaddir.$_FILES['plik1']['name'];
            // nazwa tymczasowa zmiennej 
            $temp_name = $_FILES['plik1']['tmp_name'];
            if (move_uploaded_file($temp_name, $new_name)) {
                echo("Plik został załadowany");
            }
            else
            {
                echo("Nieprawidłowy plik");

            }
        }
        else
        {
            echo("Wystąpił błąd!");
            switch ($_FILES['plik1']['error']) 
            {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    ECHO("pRZEKROCZONTY MAKSUMALNI=U ROZMIAR OKU");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo("Odebrano tylko częśc pliku");
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo("plik nie zostawtbrany");
                    break;
                default:
                    echo("Nieznany typ błędu");
            }
                
        }
    ?>
</body>
</html>