<?php
setcookie("user", "", time() - 3600, '/');
header("Location: /untitled/index.php");
