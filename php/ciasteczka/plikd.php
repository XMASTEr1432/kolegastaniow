<?php 
    if (!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa'])) {
        include("plikb.inc");
        include("plika.inc");
        include("plikc.inc");
    }
    else
    {
        if (isset($_POST['nazwa'])) {
            setcookie("nazwa", $_POST['nazwa'], time() + 60);
            include("plikb.inc");
            echo("<p align='center'>Dziękujemy za podanie danych.</p>");
            include("plikc.inc");
        }
        else
        {
            include("plikb.inc");
            echo("elo żelo rozpoznany plik cookie {$_COOKIE['nazwa']}.");
            include("plikc.inc");
        }
    }
?>