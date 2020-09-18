<?php
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    @require "db.php";
    
    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname) or die ("DB Error");
    mysqli_set_charset($conn, "utf8");
    $query = "Select * from uzytkownicy where user='$user' and pass='$pass'";
    $result = mysqli_query($conn, $query) or die ("Data Error");
    $number_users = mysqli_num_rows($result);

    if($number_users)
        {
            unset($_SESSION['error']);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $row['user'];
            $_SESSION['email'] = $row['email'];
            header('Location: profil.php');
        }
    else
        {
            $_SESSION['error'] = "<p style='color: red'>Nie ma gościa w bazie</p>";
            header('Location: login.php');
        }
?>
