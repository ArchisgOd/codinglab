<?php
$newEmail = filter_var(trim($_POST['newEmail']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['confirmPassword']),
    FILTER_SANITIZE_STRING);

$user = $_COOKIE['user'];
$mysql = mysqli_connect("localhost", "root", "", "codingLab");
$results = mysqli_query($mysql, "SELECT * FROM  `users` where `login`='$user' ");
$results = mysqli_fetch_assoc($results);

if ($results['pass'] == $pass) {
    $mysql->query("UPDATE `users` SET `email` = '$newEmail' WHERE `login` = '$user'");
}

header('Location: /codinglab/index.php');