<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="nav-header-main">
            <a class="nav-header-logo-a" href="index.php">
                <img class="nav-header-logo" src="img/22314.png" alt="logo">
            </a>
            <ul class="nav-header-list">
                <li><a class="nav-header-ref" href="index.php">Home</a></li>
                <li><a class="nav-header-ref" href="#">Stuff</a></li>
                <li><a class="nav-header-ref" href="#">More Stuff Me</a></li>
                <li><a class="nav-header-ref" href="#">All the Stuff</a></li>
            </ul>
            <div class="nav-header-login">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '  <form action="includes/logout.inc.php" method="post">
                                    <button class="nav-header-button" type="submit" name="logout-submit">Logout</button>
                                </form>';
                    }
                    else {
                        echo '  <form action="includes/login.inc.php" method="post">
                                    <input class="nav-header-input" type="text" name="mailuid" placeholder="Username/Email...">
                                    <input class="nav-header-input" type="password" name="pwd" placeholder="Password...">
                                    <button class="nav-header-button" type="submit" name="login-submit">Login</button>
                                </form>
                                <a class="nav-header-ref" href="signup.php">Signup</a>';
                    }
                ?>
            </div>
        </nav>
    </header>
</body>

</html>