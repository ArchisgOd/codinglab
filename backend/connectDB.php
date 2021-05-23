<?php
global $mysqli;
$mysqli = mysqli_connect("localhost", "root", "","codingLab");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}
