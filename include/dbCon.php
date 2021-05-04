<?php

    $link = mysqli_connect('localhost', 'root','', 'register-bg');
    if(mysqli_connect_errno()){
        echo 'Ошибка к подключении  к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    }