<?php
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$conn = pg_connect("host=localhost port=5432 dbname=betcompany user=postgres password=qwerty");

$result = pg_query($conn, "select * from users");
var_dump(pg_fetch_all($result));

?>