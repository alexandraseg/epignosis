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
                  <li><a href="../../pages/user/account.php" title="Ο λογαριασμός μου"><i class="fas fa-user"></i> Ο λογαριασμός μου</a></li>
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
<!-- #####################  BODY ###############################################################-->


<div class="wrapper bgded overlay gradient" style="background-image:url('../../images/demo/backgrounds/user.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

  <h6 class="heading">Ο λογαριασμός μου</h6>
    
    <ul>
      <li><a href="../../index.php">Αρχική</a></li>
      <li><p class="active-breadcrumb">Ο λογαριασμός μου <p></li>
    </ul>

  </div>
</div>



<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
  
        <div class="profile-page-content">
            <div class="profile">
                <?php
                if (isset($_SESSION['logged-in-now']) && ( $_SESSION['logged-in-now'] == "Y") ) 
                {

                        echo '<h4 style="color:   green;">Eπιτυχής σύνδεση !</h4> <br>';
                }
                unset($_SESSION["change"]);
                unset($_SESSION['logged-in-now']);
                ?>

                <!-- ##################################edit######################################### --> 
                <?php  
                    $afm = $_SESSION['afm'];
                    $result = mysqli_query($db,"SELECT * FROM users WHERE afm='$afm'");
                    $row = $result->fetch_row();
                    if ($row[3] == 1){
                      $result2 = mysqli_query($db,"SELECT * FROM users");
                      $row2 = $result2->fetch_row();
                      $numrowsusers = mysqli_num_rows($result2);
                    ?>
                  
                  <!-- ###################### -->
                  <div class="wrapper row3">
                  <section id="cta" class="hoc container clear"> 
                    <div class="log-btn">
                       <a href="../usercreationform.php"> <button type="submit" name="login">Δημιουργία Χρήστη</button> </a>
                    </div>
                 </section>
               </div>

                <h2>Χρήστες</h2>
                   <table >
                        <tr>
                            <th>Όνομα</th>
                            <th>Επώνυμο</th>
                            <th>Email</th>
                            <th>Κατηγορία</th>
                        </tr>

                        <?php
                          for ($i=0; $i<$numrowsusers; $i++){
                          $result2->data_seek($i);
                          $rowUsers = $result2->fetch_array();

                          echo <<< _END
                          <tr>
                            <td>$rowUsers[5] </td>
                            <td>$rowUsers[6] </td>
                            <td>$rowUsers[4] </td>
                            <td>$rowUsers[3] </td>
                          </tr>

                          _END;
                          }
                        ?>

                    </table>
                  
                    <?php
                      
                    }
                    else if ($row[3] == 2) { 
                      $result3 = mysqli_query($db,"SELECT * FROM ergazomenos WHERE afm='$afm'");
                      $row3 = $result3->fetch_row();
                      ?>

                           
                  <?php }
                    else{

                    }     
                ?>
          </div>


                <!-- ##################################edit######################################### --> 
                
                
                <?php 
                 $afm = $_SESSION['afm']; 

                 $resultVacationRequest = mysqli_query($db,"SELECT * FROM vacationRequest WHERE afm='$afm' ORDER BY date_submitted " );
                 $numrowsVacationRequest = mysqli_num_rows($resultVacationRequest);
                

                 if ($numrowsVacationRequest > 0){
                  $rowVacationRequest = $resultVacationRequest->fetch_row();
                ?>

                <div class="wrapper row3">
                  <section id="cta" class="hoc container clear"> 
                    <div class="log-btn">
                       <a href="../../pages/submissionform.php"> <button type="submit" name="login">Υποβολή Αίτησης</button> </a>
                    </div>
                 </section>
               </div>

                <h2>Αιτήσεις Άδειας</h2>
                   <table >
                        <tr>
                            <th>Ημ/νία Υποβολής</th>
                            <th>Από</th>
                            <th>Έως</th>
                            <th>Ημέρες</th>
                            <th>Κατάσταση</th>
                        </tr>
                      
                  <?php
                  
                    $i=0;
                    while ($i<$numrowsVacationRequest){
                      $resultVacationRequest->data_seek($i);
                      $rowVacationRequest = $resultVacationRequest->fetch_array();

                      echo <<< _END
                        <tr>
                          <td> $rowVacationRequest[4] </td>
                          <td> $rowVacationRequest[1] </td>
                          <td> $rowVacationRequest[2] </td>
                          <td> $rowVacationRequest[5] </td>
                          <td> $rowVacationRequest[6] </td>
                        </tr>
                      _END;
                      $i++;
                    }
                  ?>

                  </table>
                
                <?php
                 }
                ?>

                
                <div class="profile-op">
                    <p>Θέλετε να αποσυνδεθείτε; <a href="backend/logout.php">Αποσυνδεση</a></p>
                </div>
      </div>
    </section>


</div>

<!-- #####################  BODY ###############################################################-->


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