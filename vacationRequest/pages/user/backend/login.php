<?php
require '../../../config.php';
session_start();

if (isset($_POST['login'])){
    
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $result = mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    $numrows = mysqli_num_rows($result);

    if ($numrows == 0) {
        $_SESSION['logged-in-now'] = "ERROR";
        header("Location: ../login.php");
    } else if ($numrows == 1){
        
        $row = $result->fetch_row();
        $afm = $row[0];
        $type = $row[3];

        $_SESSION['username'] = $username;
        $_SESSION['afm'] = $afm;
        $_SESSION['type'] = $type;
        $_SESSION["login"] = "OK";
        $_SESSION['logged-in-now'] = "Y";

        header("Location: ../account.php");
    }    
    mysqli_free_result($result);
    mysqli_close($db);
}
 
?>