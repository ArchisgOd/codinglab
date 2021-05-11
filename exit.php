<?php
require_once 'include/connetionphp.php';
setcookie('user', $user['name'], time() - 3600, "/");
    header('Location: /');