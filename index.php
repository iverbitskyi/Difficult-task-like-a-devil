<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- тег, який буде зжимати наш сайт на мобільних пристроях -->
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <!-- тег, який дозволяє зробити наш сайт адаптивний для браузера Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Main </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Фреймворк, який дає багато підготовлених раніше стилів -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <?php
        if(!isset($_COOKIE) || !key_exists('user', $_COOKIE) || $_COOKIE['user'] == '') {
            require "blocks/header_out.php";
        } else {
            require "blocks/header_in.php";
        }
    ?>
    
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://docs.google.com/uc?export=download&id=1YoNVYhC49SKbPMyY2VvTeTgaeiMzzPN-" class="d-block mx-lg-auto img-fluid" alt="Зображення" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Складний як дідько сайт</h1>
                <p class="lead">На цьому сайті ви маєте змогу розв'язати складне як дідько завдання. Для цього зареєструйтеся, або увійдіть, якщо у вас вже є акаунт. Також ви можете зайти в адмін-панель, в якій є можливість перегляну користувачів, які зареєстровані, також можна їх видаляти (паролі захешовані).
</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <?php if (!isset($_COOKIE) || !key_exists('user', $_COOKIE) || $_COOKIE['user'] == ''): ?>
                        <button type="button" onclick="document.location='/signup.php'" class="btn btn-primary btn-lg px-4 me-md-2">Задача</button>
                        <button type="button" onclick="document.location='/signup.php'" class="btn btn-outline-secondary btn-lg px-4">Вхід / Реєстрація</button>
                    <?php else: ?>
                        <button type="button" onclick="document.location='/articles.php'" class="btn btn-primary btn-lg px-4 me-md-2">Задача</button>
                        <button type="button" onclick="document.location='/admin_menu.php'" class="btn btn-outline-secondary btn-lg px-4">Адмін-панель</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php require "blocks/footer.php" ?>
</body>
</html>