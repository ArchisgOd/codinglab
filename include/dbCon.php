<?php

    $link = mysqli_connect('localhost', 'root','Talgat140502', 'register-bg');
    if(mysqli_connect_errno()){
        echo 'Ошибка к подключении  к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    }