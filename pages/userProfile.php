<?php
    include('../includes/header.php');
    include('../includes/connetionphp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php
            include('../includes/navigation.php');
        ?>
    </header>

    <div align="center">
       <hr>
            <h3>User Information</h3>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3">

                <form action="../processes/userProfileUpdateProcess.php"
                      method="POST"
                      enctype="multipart/form-data">
                    <?php

                    ?>
                
                </form>
            </div>
            
        </div>


    </div>
    
</body>
</html>