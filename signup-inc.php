<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepeat=$_POST["passwordrepeat"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if(emptyInputSignup($name, $email, $password, $passwordRepeat)!==false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email)!==false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if(passwordMatch($password, $passwordRepeat)!==false) {
        header("location: ../signup.php?error=passwords_dont_match");
        exit();
    }
    if(passwordExists($conn, $password)!==false) {
        header("location: ../signup.php?error=password_already_exists");
        exit();
    }
    if(emailExists($conn, $email)!==false) {
        header("location: ../signup.php?error=email_already_exists");
        exit();
    }

    createUser($conn, $name, $email, $password);
}
else {
    header("location: ../signup.php");
    exit();
}