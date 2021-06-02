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

$resultUser = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
$resultUser = mysqli_fetch_assoc($resultUser);

if ($betTeam1 > $resultUser['balance'] || $betTeam1 < '0') {
    echo '<script> 
             alert("INSUFFICIENT FUNDS");
             window.location.href="/codinglab/index.php";
          </script>';
} else {
    $mysqli->query("UPDATE `users` SET `balance` = balance - '$betTeam1' WHERE `login` = '$user'");
    $mysqli->query("INSERT INTO `bettomatchesstory` (`ID`, `login`, `matchID`, `paidMoney`, `team`, `tournament`) VALUES (NULL, '$user', '".$matchResult['ID']."', '$betTeam1', '".$matchResult['teamName1']."', '".$matchResult['tournament']."')");
    $mysqli->query("UPDATE `matches` SET `moneyTeam1` = moneyTeam1 + '$betTeam1' WHERE `ID` = '".$matchResult['ID']."'");

    $mysqli->query("UPDATE `matches` SET `teamCoefficient1` = 1 + (moneyTeam2 / moneyTeam1) WHERE `ID` = '".$matchResult['ID']."'");
    $mysqli->query("UPDATE `matches` SET `teamCoefficient2` = 1 + (moneyTeam1 / moneyTeam2) WHERE `ID` = '".$matchResult['ID']."'");
    $mysqli->query("UPDATE `matches` SET `draw` = 1 + teamCoefficient1 + teamCoefficient2 WHERE `ID` = '".$matchResult['ID']."'");


    header('Location: /codinglab/index.php');
}