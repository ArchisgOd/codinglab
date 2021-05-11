<?php
    include('../includes/header.php');
    include('../includes/connetionphp.php');
    $mysqli = mysqli_connect("localhost", "root", "","register-bg");
    $user = $_COOKIE['user'];
                    $results = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
                    $results = mysqli_fetch_assoc($results);

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
            <h2>User Information</h2>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3" style="font-size: 30px">
                <?php
                 echo "Login: ";
                 echo $results['login'];
                 echo "<br>";
                 echo "First Name: ";
                 echo $results['name'];
                 echo "<br>";
                 echo "Last Name: ";
                 echo $results['surname'];
                 echo "<br>";
                 echo "UIN: ";
                 echo $results['uin'];
                 echo "<br>";
                 echo "E-mail: ";
                 echo $results['email'];
                 echo "<br>";
                 echo "Balance: ";
                 echo $results['balance'];
                 echo " тг";
                ?>

                </div>
            </div>
            
        </div>


    </div>
    
</body>
</html>