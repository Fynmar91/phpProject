<?php
    require "header.php";
?>

<main class="signup-main">
    <h1>Signup</h1>
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="signup-error">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
                echo '<p class="signup-error">Invalid username and email!</p>';
            }
            else if ($_GET['error'] == "invaliduid") {
                echo '<p class="signup-error">Invalid username!</p>';
            }
            else if ($_GET['error'] == "invalidmail") {
                echo '<p class="signup-error">Invalid email!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="signup-error">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p class="signup-error">Username is already taken!</p>';
            }
        }
        else if (isset($_GET['signup']) == "success") {
            echo '<p class="signup-success">Signup successful!</p>';
        }
    ?>
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