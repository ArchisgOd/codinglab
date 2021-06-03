<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
    $matchResult = mysqli_fetch_assoc($matchResult);
}

$mysqli->query("UPDATE `matches` SET `matchEnd` = 1");

$resultUsers = $mysqli->query("SELECT * FROM `users`");
if ($resultUsers->num_rows > 0) {
    while ($row = $resultUsers->fetch_assoc()) {
        $mysqli->query("");
    }
}
?>