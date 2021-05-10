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


<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_right"> 
        <ul class="nospace">
            <?php if ((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {  ?>
                  <li><a href="user/account.php" title="Ο λογαριασμός μου"><i class="fas fa-user"></i> Ο λογαριασμός μου</a></li>
            <?php } else { ?>
                  <li><a href="user/login.php" title="Σύνδεση"><i class="fas fa-sign-in-alt"></i> Σύνδεση</a></li>
                  <li><a href="user/register.php" title="Εγγραφή"><i class="fas fa-edit"></i> Εγγραφή</a></li>
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
<!-- #################################################################################################-->


<div class="wrapper bgded overlay gradient"  style="background-image:url('../images/demo/backgrounds/contact.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

  <h6 class="heading">Υποβολή Αίτησης Άδειας</h6>
    
    <ul>
        <li><a href="../index.php">Αρχική</a></li>
      <li><p class="active-breadcrumb">Αίτηση Άδειας</p></li>
    </ul>
  </div>
</div>

<!-- ##########################BODY#######################################################################-->


<script>
var today = new Date().toISOString().split('T')[0];
document.getElementsByClassName("date")[0].setAttribute('min', today);
</script>
<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
  
      <div class="login-page-content">
        <div class="login-form">
            <?php
                if ( (isset($_POST['vacationReq'])) ) 
                {
                    $date = $_POST['date'];

                    $sql_check = mysqli_query($db,"SELECT * FROM vacationRequest WHERE date='$date'");

                    $numrows = mysqli_num_rows($sql_check);
                    
                            $afm = $_POST['afm'];
                
                            $email = $_POST['email'];

                            $from_date = $_POST['from_date'];
                            $to_date = $_POST['to_date'];
                            $reason = $_POST['reason'];
              
                            
                            $query = "INSERT INTO vacationRequest (afm, email, from_date, to_date, reason) VALUES('$afm', '$email', '$from_date', '$to_date', '$reason')";
                            $result = mysqli_query($db,$query);
                    
                        
                        echo '<h4 style="color:   green;">Θα λάβετε ένα mail επιβεβαίωσης!</h4> <br>';
                    
                } 
            ?>
              <form action="user/account.php" method = "post">
                    <?php if ((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){ ?>
                        <?php if ( isset($_SESSION['type']) ) {?>
                            <?php 
                            $type = $_SESSION['type'];
                            $afm = $_SESSION['afm'];
                            ?>
                            <?php if ($type == '2') {?>
                                <?php 
                                    $result = mysqli_query($db,"SELECT * FROM ergazomenos WHERE afm='$afm'");
                                    $row = $result->fetch_row();
                                ?>
                                <div class="form-row">
                                    <div class="password">
                                        <label id="contact-text">Aπό</label>
                                        <input name="from_date" type="date" class="date" required   pattern="[a-zA-Zα-ωΑ-Ω ]+" data-date-split-input="true" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="password">
                                        <label id="contact-text">Έως</label>
                                        <input name="to_date" type="date" class="date" required   pattern="[a-zA-Zα-ωΑ-Ω ]+" data-date-split-input="true" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="password">
                                        <label id="contact-email">Είδος άδειας</label>
                                        <input name="reason" type="text" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                            <?php }?>
                        <?php }  else { ?>
                        <?php } ?>
                    <?php } else { ?>
                    <?php } ?>
                    <div class="log-btn">
                      <button type="submit" name="vacationReq"> Υποβολή</button>
                    </div>
			    </form>
          </div>
                		
          <div style="position: relative; bottom: -25px; right:-230px; " >
                <a href="user/account.php">Πίσω</a>
              </div>
      </div>
    </section>


</div>
<!-- #################################################################################################-->
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