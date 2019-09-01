<?php 
require('connect_bdd.php');
session_start();


//Vérification d'identité--------------------------------------------------------------------------------------------------------------------------------------------------
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
                    //misintona_insertion---------------------------------------------------------------------------------------------------------------------------------------
                    $appel_misintona = $query->misintona();
                    $tab = array();
                    $i = 0;
                    while($donne = $appel_misintona->fetch()){
                              $tab[$i] = $donne;
                              $i++;
                    }
                    $nbr_ligne = count($tab);
                    $_SESSION["tab"] = $tab;
                    $_SESSION["nbr"] = $nbr_ligne;
                    header('location:tableau.php');

          }
          else{
                    header('location:admin.php?erreur=true');
          }
}


//Ajout de médicaments-------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['ampidiro']))
{            
          if  ( (!empty($_POST['ref']) and (!empty($_POST['anarana']) and  (!empty($_POST['isa_amp']) and (!empty($_POST['vidin_irai']) )))))
          {         
                    if ( intval(($_POST['ref'])) ) 
                    {      
                              if ( intval(($_POST['isa_amp'])) ) 
                              {
                                        if ( intval(($_POST['vidin_irai']))  or intval(($_POST['vidin_irai']))  )  
                                        {
                                                  
                                                  $ref = ($_POST['ref']);
                                                  $anarana = ($_POST['anarana']);
                                                  $isa_amp = ($_POST['isa_amp']);
                                                  $vidin_irai = ($_POST['vidin_irai']);
                                                  $query = new Query_bdd;
                                                  $appel_insertion=$query->insertion($ref, $anarana, $isa_amp, $vidin_irai);
                              
                                                  //misintona_insertion------------------------------------------------------------------------------------------------------------------------------------
                                                  $appel_misintona = $query->misintona();
                                                  $tab = array();
                                                  $i = 0;
                                                  while($donne = $appel_misintona->fetch()){
                                                            $tab[$i] = $donne;
                                                            $i++;
                                                  }
                                                  $nbr_ligne = count($tab);
                                                  $_SESSION["tab"] = $tab;
                                                  $_SESSION["nbr"] = $nbr_ligne;
                                                  header("location:tableau.php");
                                        }
                                        else{
                                                  header('location:tableau.php?erreur_vola=true');
                                        }
                              }
                              else{
                                        header('location:tableau.php?erreur_isa=true');
                              }
                    }
                    else{
                              header('location:tableau.php?erreur_reference=true');
                    }
          }
           else{
                    header('location:tableau.php?erreur=true');
          }
}
          



 //hamafa-------------------------------------------------------------------------------------------------------------------------------------------------------
 if (isset($_GET['id'])) {
           $id = htmlspecialchars($_GET['id']);
           $query = new Query_bdd;

           $appel_mamafa = $query->mamafa($id);
           if ($appel_mamafa === false) {
                     echo 'error_supp';
           }
           else{
                    $appel_misintona = $query->misintona();
                    $tab = array();
                    $i = 0;
                    while($donne = $appel_misintona->fetch()){
                              $tab[$i] = $donne;
                              $i++;
                    }
                    $nbr_ligne = count($tab);
                    $_SESSION["tab"] = $tab;
                    $_SESSION["nbr"] = $nbr_ligne;
                    header('location:tableau.php?succes=true');
           }
 }


 



 
//deconnexion--------------------------------------------------------------------------------------------------
if (isset($_GET['deconnection'])) {
          session_start();
          $_SESSION = array ();
          session_destroy();
          header('location:accueil.php');
}
