<?php
setcookie("user", "", time() - 3600, '/');
header("Location: /codinglab/index.php");
