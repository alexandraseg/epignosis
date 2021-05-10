<?php
require '../config.php';
session_start();

?>

<!DOCTYPE html>

<html lang="el">

<head>
  <title>vacationHR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon" />

  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="../layout/styles/styles.css" rel="stylesheet" type="text/css" media="all">
</head>


<body>

<center><h4>Επιτυχής Υποβολή!</h4></center>
<center><img src="../images/demo/backgrounds/success.png"></center>
<center><h4>Θα σας αποσταλεί email επιβεβαίωσης.</h4></center>
<center> <form action="../index.php" method="post"> <button type="submit">Συνέχεια</button> </form></center>

   
</body>
</html>