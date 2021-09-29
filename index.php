<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Форма регистрации</title>
</head>
<body>
    <div class="container mt-4">
        <?php if($_COOKIE['user'] == ''): ?>
            <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control mb-3" name="login" id="login" placeholder="Введите логин">
                    <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Введите имя">
                    <input type="password" class="form-control mb-3" name="pass" id="pass" placeholder="Введите пароль">
                    <button type="submit" class="btn btn-success mb-4 ml-4">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control mb-3" name="login" id="login" placeholder="Введите логин">
                    <input type="password" class="form-control mb-3" name="pass" id="pass" placeholder="Введите пароль">
                    <button type="submit" class="btn btn-success mb-4 ml-4">Войти</button>
                </form>
            </div>
        </div>
        <?php else: ?>
            <p>Привет, <?= $_COOKIE['user']?>! Чтобы выйти <a href="/exit.php">нажмите</a></p>
        <?php endif;?>
    </div>

</body>
</html>
<?php
