<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- тег, який буде зжимати наш сайт на мобільних пристроях -->
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <!-- тег, який дозволяє зробити наш сайт адаптивний для браузера Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Signup </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Фреймворк, який дає багато підготовлених раніше стилів -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <?php require "blocks/header_out.php" ?>


    <div class="container mt-5">
        <h3 class="mb-5">Будь ласка зареєструйтеся, або увійдіть, якщо у вас вже є акаунт</h3>

        <div class="row">
            <div class="col">
                <h1> Форма реєстрації </h1><br>

                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>

                    <button class="btn btn-success" type="submit"> Зареєструватися </button>
                </form>
            </div>
            <div class="col">
                <h1> Форма авторизації </h1><br>

                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>

                    <button class="btn btn-success" type="submit"> Увійти </button>
                </form>
            </div>
        </div>
    </div>

    <?php require "blocks/footer.php" ?>
</body>
</html>