<?php 
    session_start();
?>

<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = new mysqli($servername, $username, $password, 'baza_testowa');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $loginForm = @$_GET['login'];

    $passwordForm = @$_GET['haslo'];

    $query = 'SELECT login, password FROM users WHERE login = "'.$loginForm.'" AND password = "'.$passwordForm.'"';

    $wynik = mysqli_query($conn, $query);

    if (mysqli_num_rows($wynik) == 0) {
        $query = 'INSERT INTO users (login, password) VALUES ("'.$loginForm.'","'.$passwordForm.'")';
        $wynik = mysqli_query($conn, $query);
        echo("Dodano użytkownika! Proszę się zalogować <br> <a href='index.php'>Powrót</a>");
    }
    mysqli_close($conn);
?>