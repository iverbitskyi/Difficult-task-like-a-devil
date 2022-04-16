<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 4 || mb_strlen($login) > 90) {
        echo "Недопустима довжина логіну";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустима довжина імені";
        exit();
    } else if(mb_strlen($pass) < 5) {
        echo "Недопустима довжина паролю (мінімум 6)";
        exit();
    }

    // хешування паролю
    $pass = md5($pass."akldkadca123412");

    $mysql = new mysqli('localhost', 'id18141871_database', '-TB)~XTH(cL+X&D4', 'id18141871_coursework_db');

    $mysql->query("INSERT INTO `users` ( `login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /signup.php');
?>
