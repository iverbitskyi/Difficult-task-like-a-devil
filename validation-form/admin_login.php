<?php
    session_start();

    $admin_login = "admin";
    $admin_pass = "123123123";

    if ($admin_login === $_POST['admin_login'] && $admin_pass === $_POST['admin_pass']) {

        $_SESSION["admin_login"] = $_POST['admin_login'];
        $_SESSION["admin_pass"] = $_POST['admin_pass'];

        header('Location: /admin_menu.php');
    } else {
        header('Location: /admin.php');
    }
?>