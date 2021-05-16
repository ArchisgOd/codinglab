<?php
$mysqli = false;

global $mysqli;
$mysqli = mysqli_connect("localhost", "root", "","register-bg");

if($mysqli-> connect_error){
    die("Coonect faile:" .$mysqli->connect_error);
    echo "NETNETNET";
}

$mysqli->query("SET NAMES 'utf-8'");


function closeDB()
{
    global $mysqli;
    $mysqli->close();
}