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

if ($betTeam2 > $resultUser['balance'] || $betTeam2 < '0') {
    echo '<script> 
             alert("INSUFFICIENT FUNDS");
             window.location.href="/codinglab/index.php";
          </script>';
} else {
    $mysqli->query("UPDATE `users` SET `balance` = balance - '$betTeam2' WHERE `login` = '$user'");
    $mysqli->query("INSERT INTO `bettomatchesstory` (`ID`, `login`, `matchID`, `paidMoney`, `team`, `tournament`) VALUES (NULL, '$user', '" . $matchResult['ID'] . "', '$betTeam2', '" . $matchResult['teamName2'] . "', '" . $matchResult['tournament'] . "')");
    $mysqli->query("UPDATE `matches` SET `moneyTeam2` = moneyTeam2 + '$betTeam2' WHERE `ID` = '" . $matchResult['ID'] . "'");


    header('Location: /codinglab/index.php');
}
