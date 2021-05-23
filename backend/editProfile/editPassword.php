<?php
$newPass = filter_var(trim($_POST['newPassword']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['confirmPassword']),
    FILTER_SANITIZE_STRING);

$user = $_COOKIE['user'];
$mysql = mysqli_connect("localhost", "root", "", "codingLab");
$results = mysqli_query($mysql, "SELECT * FROM  `users` where `login`='$user' ");
$results = mysqli_fetch_assoc($results);

if ($results['pass'] == $pass) {
    $mysql->query("UPDATE `users` SET `pass` = '$newPass' WHERE `login` = '$user'");
}

header('Location: /codinglab/editProfile.php');
