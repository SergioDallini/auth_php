<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        exit("Недопустимая длина логина");
    }
    else if(mb_strlen($name) < 3 || mb_strlen($login) > 60){
        exit("Недопустимая длина имени");
    }
    else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 8){
        exit("Недопустимая длина пароля (от 2 до 8 символов)");
    }
    $pass = md5($pass."hdh2h48dnhd73n");

    require "../blocks/connect.php";
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /');