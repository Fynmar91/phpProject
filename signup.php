<?php
    require "header.php";
?>

<main class="signup-main">
    <h1>Signup</h1>
    <form class="signup-form" action="includes/signup.inc.php" method="post">
        <input class="signup-input" type="text" name="uid" placeholder="Username">
        <input class="signup-input" type="text" name="mail" placeholder="Email">
        <input class="signup-input" type="password" name="pwd" placeholder="Password">
        <input class="signup-input" type="password" name="pwd-repeat" placeholder="Repeat password">
        <button class="signup-button" type="submit" name="signup-submit">Signup</button>
    </form>
</main>

<?php
    require "footer.php";
?>