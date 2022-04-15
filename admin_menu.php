<?php
    session_start();

    $admin_login = "admin";
    $admin_pass = "123123123";

    if ($_SESSION['admin_login'] !== $admin_login || $_SESSION['admin_pass'] !== $admin_pass) {
        header('Location: admin.php');
    }

    require_once "validation-form/connect.php";
    
    $users = mysqli_query($connect, "SELECT * FROM `users`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- тег, який буде зжимати наш сайт на мобільних пристроях -->
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <!-- тег, який дозволяє зробити наш сайт адаптивний для браузера Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Adminpanel </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Фреймворк, який дає багато підготовлених раніше стилів -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <?php require "blocks/header_in.php" ?>

    <div class="container"">
        <ul class="nav nav-pills">
            <a href="validation-form/admin_logout.php" class="nav-link">Вийти з адмін-панелі</a>
        </ul>
    </div>

    <div class="container">
        <h4>Користувачі:</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Логін</th>
                    <th scope="col">Пароль</th>
                    <th scope="col">Ім'я</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($user = mysqli_fetch_assoc($users)) {
                        echo '<tr>
                        <th scope="row">'.$user["id"].'</th>
                        <td>'.$user["login"].'</td>
                        <td>'.$user["pass"].'</td>
                        <td>'.$user["name"].'</td>
                        <td align="right">
                            <a class="nav-link" href="validation-form/delete_user.php?id='.$user["id"].'">Видалити</a>
                        </td>
                    </tr>';
                    };
                ?>
            </tbody>
        </table>
    </div>

    <?php require "blocks/footer.php" ?>
</body>
</html>