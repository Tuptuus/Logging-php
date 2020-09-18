<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>

<body>
    <form action="zaloguj.php" method="post">
        Login: <br> <input type="text" name="user"> <br>
        Hasło: <br> <input type="password" name="pass"> <br>
        <button>Loguj</button>
    </form>

    <?php
        if(isset($_SESSION['error']))
        {
            echo $_SESSION['error'];
        }
    ?>
</body>

</html>