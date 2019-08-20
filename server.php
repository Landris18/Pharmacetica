<?php 
require('connect_bdd.php');

if (isset($_POST['marina']))
{
          $nm = htmlspecialchars($_POST['solonanarana']);
          $ps = sha1($_POST['tenimiafina']);
          $query = new Query_bdd;
          $appel_verifcation=$query->verification($nm, $ps);
          if ($appel_verifcation == 1)
          {
                    session_start();
                    $_SESSION['solonanarana'] = 	$_POST['solonanarana'];
                    header('location:tableau.php');

          }
          else{
                    header('location:admin.php?erreur=true');
          }
}


//deconnexion--------------------------------------------------------------------------------------------------
if (isset($_GET['deconnection'])) {
          session_start();
          $_SESSION = array ();
          session_destroy();
          header('location:accueil.php');
}

