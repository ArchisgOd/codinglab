<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");

$betTeam1 = filter_var(trim($_POST['betTeam1']),
    FILTER_SANITIZE_STRING);
$user = $_COOKIE['user'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
    $matchResult = mysqli_fetch_assoc($matchResult);
}

$mysqli->query("UPDATE `users` SET `balance` = balance - '$betTeam1' WHERE `login` = '$user'");
$mysqli->query("INSERT INTO `bettomatchesstory` (`ID`, `login`, `matchID`, `paidMoney`, `team`) VALUES (NULL, '$user', '".$matchResult['ID']."', '$betTeam1', '".$matchResult['teamName1']."')");
$mysqli->query("UPDATE `matches` SET `moneyTeam1` = moneyTeam1 + '$betTeam1' WHERE `ID` = '".$matchResult['ID']."'");

header('Location: /codinglab/index.php');