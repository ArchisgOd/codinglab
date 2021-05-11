<?php
    require_once 'includes/connetionphp.php';
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

    $surname = filter_var(trim($_POST['surname']),
    FILTER_SANITIZE_STRING);

    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

    $uin = filter_var(trim($_POST['uin']),
    FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login)< 2 || mb_strlen($login) > 90){
        echo "Недоступная длина логина";
        exit();
    }   else if(mb_strlen($name) < 3 || mb_strlen($name) > 50 ) {
        echo "Недопустимая длина имени";
        exit();
    }   else if(mb_strlen($surname) < 3 || mb_strlen($surname) > 50 ) {
        echo "Недопустимая длина фамилии";
        exit();

    }   else if(mb_strlen($email) < 3 || mb_strlen($email) > 50 ) {
        echo "Недопустимая длина почты";
        exit();
    }   else if(mb_strlen($uin) < 11 || mb_strlen($uin) > 13 ) {
        echo "Недопустимая длина ИИН";
        exit();
    }
        else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 80 ) {
        echo "Недопустимая длина пароли (от 2 до 80 символов)";
        exit();
    }

    $pass = md5($pass."kanatanadana123");

    $mysql = new  mysqli('localhost', 'root', '','register-bg');
    $mysql -> query("INSERT INTO `users` (`login`, `pass`, `name` , `surname` , `email`, `uin`)
    VALUES('$login', '$pass', '$name' , '$surname' , '$email' , '$uin')");

    $mysql -> close();

    header('Location: userProfile.php');
?>
