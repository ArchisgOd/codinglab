<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");

$betDraw = filter_var(trim($_POST['betDraw']),
    FILTER_SANITIZE_STRING);
$user = $_COOKIE['user'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
    $matchResult = mysqli_fetch_assoc($matchResult);
}

$mysqli->query("UPDATE `users` SET `balance` = balance - '$betDraw' WHERE `login` = '$user'");
$mysqli->query("INSERT INTO `bettomatchesstory` (`ID`, `login`, `matchID`, `paidMoney`, `team`, `tournament`) VALUES (NULL, '$user', '" . $matchResult['ID'] . "', '$betDraw', 'draw', '" . $matchResult['tournament'] . "') ");
$mysqli->query("UPDATE `matches` SET `moneyDraw` = moneyDraw + '$betDraw' WHERE `ID` = '" . $matchResult['ID'] . "'");

header('Location: /codinglab/index.php');