<?php 
    session_start();
?>
<?php 
    if (isset($_SESSION['user'])) {
        echo("Witaj użytkowniku ".$_SESSION['user']);
    }
    else {
        include('formularz.html');
    }
?>