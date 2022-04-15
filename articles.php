<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- тег, який буде зжимати наш сайт на мобільних пристроях -->
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <!-- тег, який дозволяє зробити наш сайт адаптивний для браузера Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Task </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Фреймворк, який дає багато підготовлених раніше стилів -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require "blocks/header_in.php" ?>
    
    <div class="container mt-5">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Складне як дідько завдання</h2>
                <p class="lead">Толік захотів написати всі цифри від 1 до 7 в кожній комірці відповідно до такого правила: сума цифр у 2х2 квадратах повинна збігатися. Які цифри можуть бути в комірці зі знаком питання?</p>
                <p class="lead"></p><?php require_once "validation-form/task.php"; ?></p>
            </div>
            <div class="col-md-5">
                <img class="info-image relative z2" width="500px" src="https://docs.google.com/uc?export=download&id=1s6PYO2sLlZNWwfsQ3ot7fvCijnznd96Q" alt="Зображення">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>

    <?php require "blocks/footer.php" ?>
</body>
</html>