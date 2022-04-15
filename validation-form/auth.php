<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    // хешування паролю
    $pass = md5($pass."akldkadca123412");

    $mysql = new mysqli('localhost', 'id18141871_database', '-TB)~XTH(cL+X&D4', 'id18141871_coursework_db');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    
    // конвертація даних з бази даних в масив
    $user = $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        setcookie('user', $user['name'], time() + 3600, "/");
        header('Location: ../index.php');
    }
    
    if(strlen($user) == 0) {
        echo "Тактй користувач не зареєстрований";
        exit();
    }

    $mysql->close();
?>