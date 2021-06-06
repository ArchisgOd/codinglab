<?php
$mysqli = mysqli_connect("localhost", "root", "", "codingLab");
if (isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
    $results = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
    $results = mysqli_fetch_assoc($results);
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $matchResult = $mysqli->query("SELECT * FROM matches WHERE ID = '$id'");
        $matchResult = mysqli_fetch_assoc($matchResult);
    }
}
$result = $mysqli->query("SELECT * FROM bettomatchesstory WHERE login = '$user' AND matchID = '$id' ORDER BY ID DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/match_style.css">
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
        <div class="matchBanner">
            <div class="inBanner">
                <h1 class="tournamentName"><?php echo $matchResult['tournament'] ?></h1>
            </div>
        </div>
    </section>

    <section class="matchInfo">
        <h1 class="teams">
            <?php echo $matchResult['teamName1'] ?> - <?php echo $matchResult['teamName2'] ?>
        </h1>

        <table class="match">
            <thead>
            <tr>
                <th>coefficient to <?php echo $matchResult['teamName1'] ?> win</th>
                <th>draw</th>
                <th>coefficient to <?php echo $matchResult['teamName2'] ?> win</th>
            </tr>
            <tr>
                <td><?php echo $matchResult['teamCoefficient1'] ?></td>
                <td><?php echo $matchResult['draw'] ?></td>
                <td><?php echo $matchResult['teamCoefficient2'] ?></td>
            </tr>
            </thead>
        </table>
    </section>

    <?php
        if($matchResult['matchEnd'] == '0') {
            echo '<section class="summitBet">
        <form method="post" action="backend/bet/addBetToTeam1.php?id='.$id.'">
            <input type="text" placeholder="bet on winning '.$matchResult['teamName1'].' " name="betTeam1"
                   id="betTeam1">
            <button type="submit">BET</button>
        </form>

        <form method="post" action="backend/bet/addBetToTeam2.php?id='.$id.'">
            <input type="text" placeholder="bet on winning '.$matchResult['teamName2'].' " name="betTeam2"
                   id="betTeam2">
            <button type="submit">BET</button>
        </form>

        <form method="post" action="backend/bet/addBetToDraw.php?id='.$id.'">
            <input type="text" placeholder="bet on draw" name="betDraw" id="betDraw">
            <button type="submit">BET</button>
        </form>
    </section>';

            if ($user == 'admin') {
                echo '
        <section class="adminBlock">
        <h1>ADMIN BLOCK FOR CHOOSING WINNER</h1>
        <form method="post" action="backend/matchEnd/team1Win.php?id='.$id.'">
            <button type="submit">'.$matchResult['teamName1'].' win</button>
        </form>

        <form method="post" action="backend/matchEnd/team2Win.php?id='.$id.'">
            <button type="submit">'.$matchResult['teamName2'].' win</button>
        </form>

        <form method="post" action="backend/matchEnd/drawInMatch.php?id='.$id.'">
            <button type="submit">Draw between two teams</button>
        </form>
    </section>';
            }
        }

        else {
            echo '<h1 style="text-align: center; font-size: 40px">The Match Is Over</h1>';
            echo '<br>';
            echo '<br>';
            echo '<h1 style="text-align: center; font-size: 60px">'.$matchResult['winTeam'].' </h1>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<hr>';
        }
    ?>


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
                        <th>Bet on</th>
                        <th>Money</th>
                    </tr>
                    <tr>
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
