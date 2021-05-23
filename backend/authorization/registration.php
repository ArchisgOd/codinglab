<?php

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

$mysql = new  mysqli('localhost', 'root', '','codingLab');
$mysql -> query("INSERT INTO `users` (`login`, `name` , `surname` , `email`, `uin`, `pass`)
    VALUES('$login', '$name' , '$surname' , '$email' , '$uin', '$pass')");

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result-> fetch_assoc();

$mysql -> close();

header('Location: /untitled/index.php');