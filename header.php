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
            <a href="#">
                <img class="header-logo" src="img/22314.png" alt="logo">
            </a>
            <ul class="nav-header-list">
                <li><a class="nav-header-ref" href="index.php">Home</a></li>
                <li><a class="nav-header-ref" href="#">Portfolio</a></li>
                <li><a class="nav-header-ref" href="#">About Me</a></li>
                <li><a class="nav-header-ref" href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <form action="includes/login.inc.php" method="post">
                    <input class="nav-header-input" type="text" name="mailuid" placeholder="Username/Email...">
                    <input class="nav-header-input" type="password" name="pws" placeholder="Password...">
                    <button class="nav-header-button" type="submit" name="login-submit">Login</button>
                </form>
                <a class="nav-header-ref" href="signup.php">Signup</a>
                <form action="includes/logout.inc.php" method="post">
                    <button class="nav-header-button" type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>

</html>