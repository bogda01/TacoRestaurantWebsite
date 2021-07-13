<?php
    include_once 'header.php';
?>
    <!--Signup form-->
    <section class="signup-form">
        <h2>Log in</h2>
        <form action="includes/login-inc.php" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
        </form>
        <?php
        if(isset($_GET["error"])) {
            if($_GET["error"]=="emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if($_GET["error"]=="email_invalid")
            {
                echo "<p>Invalid Email</p>";
            }
            else if($_GET["error"]=="password_invalid")
            {
                echo "<p>Invalid Password</p>";
            }

        }
        ?>
    </section>
    <!--Signup form ending-->

<?php
    include_once 'footer.php';
?>
