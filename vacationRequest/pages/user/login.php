<?php
require '../../config.php';
session_start();

?>

<!DOCTYPE html>

<html lang="el">

<head>
  <title>vacationHR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon" />

  <link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="../../layout/styles/styles.css" rel="stylesheet" type="text/css" media="all">
</head>


<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_right"> 
        <ul class="nospace">
            <?php if ((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {  ?>
                  <li><a href="../pages/user/account.php" title="Ο λογαριασμός μου"><i class="fas fa-user"></i> Ο λογαριασμός μου</a></li>
            <?php } else { ?>
                  <li><a href="../../pages/user/login.php" title="Σύνδεση"><i class="fas fa-sign-in-alt"></i> Σύνδεση</a></li>
                  <li><a href="../../pages/user/register.php" title="Εγγραφή"><i class="fas fa-edit"></i> Εγγραφή</a></li>
            <?php } ?>     
        </ul>
      </div>

    </div>
  </div>


  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1 style="font-size: 20px; margin-top: -15px;"><a href="../../index.php"> vacationHR </a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
      </nav>
    </header>
  </div>

<!-- ########################## BODY #################################################### -->

<div class="wrapper bgded overlay gradient" style="background-image:url('../../images/demo/backgrounds/user.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

  <h6 class="heading">Σύνδεση Χρήστη</h6>
    
    <ul>
      <li><a href="../../index.php">Αρχική</a></li>
      <li><p class="active-breadcrumb">Σύνδεση Χρήστη<p></li>
    </ul>

  </div>
</div>
<!-- ################################# form ###################################### -->
<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
  
      <div class="login-page-content">
        <div class="login-form">
            <?php
                if ( (isset($_SESSION['logged-in-now'])) && ($_SESSION['logged-in-now'] == "ERROR")) 
                {
                    echo '<h4 style="color:   red;">Λάθος στοιχεία , προσπαθήστε ξανά !</h4> <br>';
                } 
                $_SESSION['logged-in-now'] = '';
            ?>
            <h3>καλως ορισατε!</h3>
              <form action="backend/login.php" method = "post">
                <div class="form-row">
                    <div class="username">
                    <label id="login-surname">Όνομα Χρήστη</label>
                        <input name="username" type="text" pattern="[a-zA-Z0-9]+" required >
                    </div>
                </div>
                <div class="form-row">
                    <div class="password">
                        <label id="login-name">Κωδικός Χρήστη</label>
					              <input name="password" type="password"  pattern="[a-zA-Z0-9]+" required >
                    </div>
                </div>
				          <div class="log-btn">
                    <button type="submit" name="login"><i class="fas fa-sign-in-alt"></i>  Σύνδεση</button>
                </div>
			        </form>
          </div>
                		
          <div class="create-ac">
            <p>Δεν έχετε λογαριασμό ήδη; <a href="register.php">Εγγραφή</a></p>
          </div>
          <div style="position: relative; bottom: -25px; right:-230px; " >
                <a href="../../index.php">Πίσω</a>
              </div>
      </div>
    </section>
</div>
<!-- ################################# end of form ###################################### -->

<!-- ########################## END OF BODY #################################################### -->


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