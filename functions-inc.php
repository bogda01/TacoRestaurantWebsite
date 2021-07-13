<?php

function emptyInputSignup($name, $email, $password, $passwordRepeat) {
    $result;
    if(empty($name) || empty($email) ||empty($password) ||empty($passwordRepeat)) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result;
    if($password!=$passwordRepeat) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function passwordExists($conn,$password) {
    $sql="SELECT * FROM users WHERE usersPassword = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $password);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function emailExists($conn,$email) {
    $sql="SELECT * FROM users WHERE usersEmail = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $password) {
    $sql="INSERT INTO users (usersName, usersEmail, usersPassword) VALUES (?, ?, ?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($email, $password) {
    $result;
    if(empty($email) ||empty($password)) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function loginUser($conn, $email, $password) {
    $emailExists=emailExists($conn, $email);
    if($emailExists==false) {
        header("location: ../login.php?error=email_invalid");
        exit();
    }
    $passwordHashed=$emailExists['usersPassword'];
    $checkpassword=password_verify($password,$passwordHashed);

    if($checkpassword==false) {
        header("location: ../login.php?error=password_invalid");
        exit();
    }
    else if($checkpassword==true) {
        session_start();
        $_SESSION["usersid"]=$emailExists['usersId'];
        $_SESSION["usersname"]=$emailExists['usersName'];
        header("location: ../index.php");
        exit();
    }
}