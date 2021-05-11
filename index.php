<?php
    include('includes/header.php');
    include('config/db.php');
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
            include('includes/navigation.php');
        ?>
    </header>

    <div align="center">
        <hr>
        <br>
    <?php
        if(isset($_GET['success'])){
            if($_GET['success'] == 'loggedOut'){
                ?>
                    <small class='alert alert-info'>Logged out successfully </small>
                <?php
            }else if($_GET['success'] == 'loggedIn'){
                ?>
                    <small class='alert alert-success'>Logged in successfully </small>
                <?php
            }
        }


        
       ?>
        <br>
        <hr>
        <br>
       <?php
        if(!isset($_SESSION['user_name'])){
            ?>
                <h3>Log in to access data </h3>
            <?php
        }else{
            ?>
                <h3>Welcome <?php echo ucfirst($_SESSION['user_name']); ?></h3>
                
                <img src="public/userImages/<?php echo $_SESSION['user_image']; ?>" alt="" 
                width="100px" height="100px">
            <?php
        }
       ?>
    </div>


</body>
</html>