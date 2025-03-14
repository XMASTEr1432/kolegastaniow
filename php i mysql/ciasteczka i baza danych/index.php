<?php 
    if (!isset($_COOKIE['login']) || !isset($_COOKIE['haslo'])) {
        include('logowanie.html');
    } else {
        echo 'Witaj nigga!';
    }
?>