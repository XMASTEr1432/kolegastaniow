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

    if (mysqli_num_rows($wynik) > 0) {
        while($row = mysqli_fetch_assoc($wynik)) {
            echo "" . $row["login"]. " " . $row["password"]."<br>";
            // $passwordCookie = "$passwordForm";
            echo('<a href="index.php">return</a>');
            $_SESSION['user'] = "$loginForm";
        }
    }
    mysqli_close($conn);
?>