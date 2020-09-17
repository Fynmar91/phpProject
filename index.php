<?php
    require "header.php";
?>

<main class="index-main">
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p class="index-login-status">You are logged in!</p>';
        }
        else {
            echo '<p class="index-login-status">You are logged out!</p>';
        }
    ?>
</main>

<?php
    require "footer.php";
?>