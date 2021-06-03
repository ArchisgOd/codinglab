<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
    $matchResult = mysqli_fetch_assoc($matchResult);
}

$mysqli->query("UPDATE `matches` SET `matchEnd` = 1 WHERE ID = " . $matchResult['ID'] . " ");

$resultUsers = $mysqli->query("SELECT * FROM `users`");
if ($resultUsers->num_rows > 0) {
    while ($row = $resultUsers->fetch_assoc()) {
        $mysqli->query("UPDATE `users` SET `balance` = `balance` + COALESCE((SELECT SUM(bettomatchesstory.paidMoney)
        FROM users
        INNER JOIN bettomatchesstory
        ON users.login = bettomatchesstory.login
        WHERE bettomatchesstory.matchID =' ".$matchResult['ID']." 'AND bettomatchesstory.team = 'draw' AND bettomatchesstory.login = '".$row['login']."'
        GROUP BY users.login), 0) * (SELECT `draw` FROM `matches` WHERE `ID` = '".$matchResult['ID']."')
        WHERE login = '".$row['login']."'
        ");
    }
}

header('Location: /codinglab/index.php');