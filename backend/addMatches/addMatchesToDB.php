<?php
$category = filter_var(trim($_POST['category']),
    FILTER_SANITIZE_STRING);

$team1 = filter_var(trim($_POST['team1']),
    FILTER_SANITIZE_STRING);

$team2 = filter_var(trim($_POST['team2']),
    FILTER_SANITIZE_STRING);

$mysql = new  mysqli('localhost', 'root', '','codingLab');
$mysql -> query("INSERT INTO `matches` (`category`, `teamName1` , `teamName2`)
    VALUES('$category', '$team1', '$team2')");

$mysql -> close();

header('Location: /codinglab/addMatch.php');