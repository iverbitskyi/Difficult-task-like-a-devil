<?php
    session_start();

    $admin_login = "admin";
    $admin_pass = "123123123";

    if ($_SESSION['admin_login'] !== $admin_login || $_SESSION['admin_pass'] !== $admin_pass) {
        header('Location: admin.php');
    }

    require_once "connect.php";

    $id = $_GET["id"];
    
    mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = $id");

    header('Location: /admin_menu.php');

?>