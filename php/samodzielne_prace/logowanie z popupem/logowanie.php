<?php 
    session_start();
    $_SESSION['login'] = @$_POST['login'];
    if (@$_POST['pamietaj'] == 'true') {
        # code...
    }
    header("Location: index.php");
?>