<?php
    include_once 'header.php';
?>
    <!--Signup form-->
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup-inc.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordrepeat" placeholder="Repeat password">
            <button type="submit" name="submit">Sign up</button>
        </form>
        <?php
        if(isset($_GET["error"])) {
            if($_GET["error"]=="emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if($_GET["error"]=="invalidEmail")
            {
                echo "<p>Invalid Email</p>";
            }
            else if($_GET["error"]=="passwords_dont_match")
            {
                echo "<p>Passwords dont match</p>";
            }
            else if($_GET["error"]=="password_already_exists")
            {
                echo "<p>Password already exists</p>";
            }
            else if($_GET["error"]=="stmtfailed")
            {
                echo "<p>Something went wrong. Try again.</p>";
            }
            else if($_GET["error"]=="none")
            {
                echo "<p>Congrats! You have signed up.</p>";
            }
            else if($_GET["error"]=="email_already_exists")
            {
                echo "<p>Email already exists.</p>";
            }

        }
    ?>
    </section>
    <!--Signup form ending-->

   

<?php
    include_once 'footer.php';
?> 
