<?php
    session_start();
    setcookie("user","",time()-6400,"/");

    //setcookie('user', $user['name'], time() - 3600, "/");
    unset($_SESSION["admin_login"]);
    unset($_SESSION["admin_pass"]);

    header('Location: /index.php');
?>