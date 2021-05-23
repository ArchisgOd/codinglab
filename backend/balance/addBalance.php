<?php
$balance = filter_var(trim($_POST['balance']),
    FILTER_SANITIZE_STRING);
$user = $_COOKIE['user'];

$mysql = new  mysqli('localhost', 'root', '','codingLab');
$mysql->query("UPDATE `users` SET `balance` = balance + '$balance' WHERE `login` = '".$_COOKIE['user']."'");
header('Location: /untitled/index.php');