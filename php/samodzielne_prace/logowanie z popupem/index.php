<?php 
    session_start();
    if (@!($_SESSION['login'] != '')) {
        include('formularz-login.html');
    }

?>