<?php
if (isset($_COOKIE['user'])) {
    $mysqli = mysqli_connect("localhost", "root", "", "codingLab");
    $user = $_COOKIE['user'];
    $results = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
    $results = mysqli_fetch_assoc($results);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
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
                <form>
                    <label>
                        <img src="https://img.icons8.com/ios-filled/24/000000/search--v1.png" alt="searchIcon"
                             class="searchIcon">
                        <input type="search" class="search" placeholder="Search here">
                    </label>
                </form>

                <?php
                if (isset($_COOKIE['user'])) {
                    echo '<a href="user.php" style="margin: 0 30px">
                    <span style="font-weight: bold">User: </span>' . $_COOKIE['user'] . '
                    <br>
                    <span style="font-weight: bold">Balance: </span>' . $results['balance'] . ' тг
                    </a>';
                } else {
                    echo '<a href="login.php" class="logButton">Login</a>
                <a href="registration.php" class="logButton">Registration</a>';
                }
                ?>

            </div>
        </nav>
    </section>

    <section>
        <div class="banner">
            <div class="bannerSide">
                <h1>Best Bookmaker</h1>
                <p>The best coefficients are only with us and nowhere else</p>
            </div>
            <div class="bannerSide">
                <h1 class="logoContent">
                    TaDaNatBet
                    <div class="logo">
                        <div class="redSquare s1"></div>
                        <div class="redSquare s2"></div>
                    </div>
                </h1>
            </div>
        </div>
    </section>

    <section class="matchesBlock">
        <div class="matchesList">
            <h1>Matches</h1>
            <a href="#" class="matchLink">
                <table class="match">
                    <thead>
                    <tr>
                        <th rowspan="2"><img class="matchesCategoryImage" src="image/matchesCategoryImg/football.svg">
                        </th>
                        <th>team name 1</th>
                        <th>coefficient</th>
                        <th>draw</th>
                        <th>coefficient</th>
                        <th>team name 2</th>
                    </tr>
                    <tr>
                        <td>team1</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>team2</td>
                    </tr>
                    </thead>
                </table>
            </a>

            <a href="#" class="matchLink">
                <table class="match">
                    <thead>
                    <tr>
                        <th rowspan="2"><img class="matchesCategoryImage" src="image/matchesCategoryImg/football.svg">
                        </th>
                        <th>team name 1</th>
                        <th>coefficient</th>
                        <th>draw</th>
                        <th>coefficient</th>
                        <th>team name 2</th>
                    </tr>
                    <tr>
                        <td>team1</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>team2</td>
                    </tr>
                    </thead>
                </table>
            </a>

            <a href="#" class="matchLink">
                <table class="match">
                    <thead>
                    <tr>
                        <th rowspan="2"><img class="matchesCategoryImage" src="image/matchesCategoryImg/football.svg">
                        </th>
                        <th>team name 1</th>
                        <th>coefficient</th>
                        <th>draw</th>
                        <th>coefficient</th>
                        <th>team name 2</th>
                    </tr>
                    <tr>
                        <td>team1</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>team2</td>
                    </tr>
                    </thead>
                </table>
            </a>

            <a href="#" class="matchLink">
                <table class="match">
                    <thead>
                    <tr>
                        <th rowspan="2"><img class="matchesCategoryImage" src="image/matchesCategoryImg/football.svg">
                        </th>
                        <th>team name 1</th>
                        <th>coefficient</th>
                        <th>draw</th>
                        <th>coefficient</th>
                        <th>team name 2</th>
                    </tr>
                    <tr>
                        <td>team1</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>1.0</td>
                        <td>team2</td>
                    </tr>
                    </thead>
                </table>
            </a>
        </div>
    </section>
</section>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/script.js"></script>
</body>
</html>