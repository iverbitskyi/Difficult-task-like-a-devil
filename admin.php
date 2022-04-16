<?php
    session_start();
    
    if(isset($_SESSION['admin_login'] ) && isset($_SESSION['admin_pass'])) {
        header('Location: admin_menu.php');
    }
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
    <title> Admin </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Фреймворк, який дає багато підготовлених раніше стилів -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <?php require "blocks/header_in.php" ?>

    <main style="margin-top: 20px;">
        <form action="validation-form/admin_login.php" method="post" class="row g-3 col-md-6" style="width: 400px;">
            <h2> Вхів в адмін-панель </h2>

            <div class="col-md-12">
                <label for="var-title" class="form-label"> Логін (admin) </label>
                <input type="text" name="admin_login" class="form-control" id="var-title">
            </div>

            <div class="col-md-12">
                <label for="var-title" class="form-label"> Пароль (123123123) </label>
                <input type="password" name="admin_pass" class="form-control" id="var-title">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary"> Увійти </button>
            </div>
        </form>
    </main>

    <?php require "blocks/footer.php" ?>
</body>
</html>