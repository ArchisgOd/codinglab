<?php
    require_once 'includes/connetionphp.php';
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);


    $pass = md5($pass."kanatanadana123");

    $mysql = new  mysqli('localhost', 'root', '','register-bg');
    $result = $mysql->query("SELECT * FROM `users` WHERE 'login' = 'login' AND `pass` = '$pass'");
    $user = $result-> fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найдет";
        exit();
    }
    setcookie('user', $user['name'], time() + 3600, "/");


    $mysql -> close();

    header('Location: /login_index.html');