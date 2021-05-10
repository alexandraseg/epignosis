<?php
require 'config.php';
session_start();

?>

<!DOCTYPE html>

<html lang="el">
<head>
  <title>vacationHR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="layout/styles/styles.css" rel="stylesheet" type="text/css" media="all">
</head>


<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_right"> 
        <ul class="nospace">
            <?php if ((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {  ?>
                  <li><a href="pages/user/account.php" title="Ο λογαριασμός μου"><i class="fas fa-user"></i> Ο λογαριασμός μου</a></li>
            <?php } else { ?>
                  <li><a href="pages/user/login.php" title="Σύνδεση"><i class="fas fa-sign-in-alt"></i> Σύνδεση</a></li>
                  <li><a href="pages/user/register.php" title="Εγγραφή"><i class="fas fa-edit"></i> Εγγραφή</a></li>
            <?php } ?>     
        </ul>
      </div>

    </div>
  </div>


  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1 style="font-size: 20px; margin-top: -15px;"><a href="index.php"> vacationHR </a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
      </nav>
    </header>
  </div>

<!-- #####################  BODY ###############################################################-->

  <div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/vacationTime.jpg');">
    <div id="pageintro" class="hoc clear"> 

      <article>
        <p></p>
        <h3 class="heading"> Time Off  </br> Request </h3>
        <div style="margin-top:15px; margin-bottom: 300px;">
          <ul class="nospace inline pushright">
          </ul>
        </div>
      </article>

    </div>
  </div>

  <!-- ##################### END OF BODY ###############################################################-->

  <div class="wrapper row5" style="margin-bottom: -200px;">
    <div id="copyright" class="hoc clear"> 
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved</p>
    </div>
  </div>


  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>