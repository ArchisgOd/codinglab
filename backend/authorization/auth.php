<?php
$dbc = mysqli_connect('localhost', 'root', '', 'codingLab') OR DIE('<p class="">Ошибка подключения к базе данных </p>');

$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
$data = mysqli_query($dbc, $query);

$mysql = new  mysqli('localhost', 'root', '','codingLab');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result-> fetch_assoc();

if(mysqli_num_rows($data) == 0) {
    mysqli_close($dbc);
    header('Location: /codinglab/login.php?id=1');
} else {
    setcookie('user', $user['login'], time() + (60*60*24*30), '/');

    $mysql -> close();


    header('Location: /codinglab/index.php');
}
