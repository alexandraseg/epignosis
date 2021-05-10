<?php
require '../../../config.php';
session_start();

if (isset($_POST['reset'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_check_id_number = mysqli_query($db,"SELECT username FROM users WHERE username='$username'");
    $numrows = mysqli_num_rows($sql_check_id_number);

    if ($numrows > 0)
    {
        $_SESSION['reset'] = "password";
        header("Location: ../reset.php");
    }

    mysqli_query($db, "UPDATE users SET password='$password' WHERE username='$username'");
    
    $_SESSION['change'] = "OK";
    header("Location: ../login.php");

}

?>