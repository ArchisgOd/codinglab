<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");
$user = $_COOKIE['user'];
$results = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
$results = mysqli_fetch_assoc($results);
$result = $mysqli->query("SELECT * FROM bettomatchesstory WHERE login = '$user' ORDER BY ID DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/user_style.css">
</head>
<body>
<section id="menu">
    <img src="https://img.icons8.com/ios-filled/50/ffffff/multiply.png" alt="exit" id="exitIcon">
    <a href="index.php" class="menuList">Home</a>
</section>

<section id="all">
    <section class="navbar">
        <nav>
            <div class="leftSide">
                <div id="menuButton">
                    <div class="menuLine"></div>
                    <div class="menuLine"></div>
                    <div class="menuLine"></div>
                </div>
                <a href="index.php" class="logo_box">TaDaNatBet</a>
            </div>

            <div class="rightSide">
                <form method="post" action="backend/authorization/logout.php">
                    <?php
                    if ($user == 'admin') {
                        echo '<a href="addMatch.php" class="logoutButton">Add match</a>';
                    }
                    ?>
                    <a href="addBalance.php" class="logoutButton">Top up balance +</a>
                    <button type="submit" class="logoutButton">Logout</button>
                </form>
            </div>
        </nav>
    </section>

    <section class="userInformation">

        <h1> Username: <?php echo $_COOKIE['user'] ?></h1>

        <div id="infoBox">
            <p><span style="font-weight: bold">First name:</span>
                <br>
                <span class="profileInfo"><?php echo $results['name']?></span>
            </p>

            <p><span style="font-weight: bold">Last Name:</span>
                <br>
                <span class="profileInfo"><?php echo $results['surname']?></span>
            </p>

            <p><span style="font-weight: bold">UIN:</span>
                <br>
                <span class="profileInfo"><?php echo $results['uin']?></span>
            </p>

            <p><span style="font-weight: bold">E-mail:</span>
                <br>
                <span class="profileInfo"><?php echo $results['email']?></span>
            </p>
            <p><span style="font-weight: bold">Balance:</span>
                <br>
                <span class="profileInfo"><?php echo $results['balance']?> тг</span>
            </p>
        </div>

        <a href="editProfile.php" class="editInformation">Edit information</a>
    </section>

    <section class="matchesBlock">
        <div class="matchesList">
            <h1>Your bet on the match</h1>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <table class="match">
                    <thead>
                    <tr>
                        <th>Tournament</th>
                        <th>Bet on</th>
                        <th>Money</th>
                    </tr>
                    <tr>
                        <td>' . $row["tournament"] . '</td>
                        <td>' . $row["team"] . '</td>
                        <td>' . $row["paidMoney"] . '</td>
                    </tr>
                    </thead>
                    </table>';
                }
            } else {
                echo "<h1 style='font-size: 35px'>You Didn't Bet</h1>";
            }
            ?>
        </div>
    </section>
</section>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>
