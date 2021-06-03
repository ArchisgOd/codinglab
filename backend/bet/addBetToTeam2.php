<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");

$betTeam2 = filter_var(trim($_POST['betTeam2']),
    FILTER_SANITIZE_STRING);
$user = $_COOKIE['user'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
    $matchResult = mysqli_fetch_assoc($matchResult);
}

$resultUser = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
$resultUser = mysqli_fetch_assoc($resultUser);


