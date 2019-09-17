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
        if  ((!empty($_POST['ref']) and (!empty($_POST['anarana']) and  (!empty($_POST['isa_amp']) and (!empty($_POST['vidin_irai']) )))))
        {
                if ( intval(($_POST['ref'])) )
                {
                        $ref = ($_POST['ref']);
                        $anarana = ($_POST['anarana']);

                        $query = new Query_bdd;
                        $appel_verif_refana = $query->verif_refana($ref, $anarana);
                        $cnt = $appel_verif_refana->rowCount();
                        if ($cnt > 0){
                                echo "Efa misy io famantarana na io anarana io";
                                // header('location:tableau.php?erreur_ref_ana_mitov=true');
                        }
                        elseif ($cnt == 0){
                                if ( intval(($_POST['isa_amp'])) )
                                {
                                        if ( intval(($_POST['vidin_irai'])))
                                        {
                                                $ref = ($_POST['ref']);
                                                $anarana = ($_POST['anarana']);
                                                $isa_amp = ($_POST['isa_amp']);
                                                $vidin_irai = ($_POST['vidin_irai']);
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
                                                echo true;
                                        }
                                        else{
                                                echo "Hamarino tsara ny vola nampidirinao";
                                                // header('location:tableau.php?erreur_vola=true');
                                        }
                                }
                                else{
                                        echo "Hamarino tsara ny isan'ny fanafody nampidirinao";
                                        // header('location:tableau.php?erreur_isa=true');
                                }
                        }
                }
                else{
                        echo "Ny famantarana dia tokony isa";
                        // header('location:tableau.php?erreur_reference_int=true');
                }
        }
        else{
                echo "Tsy maintsy fenoina daholo!";
                //header('location:tableau.php?erreur=true');
        }
}



//Hanova fanafody-------------------------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['manova']))
{

        if  ((!empty($_POST['ref_v']) and (!empty($_POST['anarana_v']) and  (!empty($_POST['isa_amp_v']) and (!empty($_POST['vidin_irai_v']) )))))
        {

                $ref_v = ($_POST['ref_v']);
                $anarana_v = ($_POST['anarana_v']);



                if ( intval(($_POST['isa_amp_v'])) )
                {
                        if ( intval(($_POST['vidin_irai_v'])))
                        {
                                $ref_v = ($_POST['ref_v']);
                                $anarana_v = ($_POST['anarana_v']);
                                $isa_amp_v = ($_POST['isa_amp_v']);
                                $vidin_irai_v = ($_POST['vidin_irai_v']);
                                $query = new Query_bdd;
                                $appel_hanova=$query->hanova_fanafody($ref_v,  $isa_amp_v, $vidin_irai_v);

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
                                echo true;
                        }
                        else{
                                echo "Hamarino tsara ny vola nampidirinao";
                                // header('location:tableau.php?erreur_vola=true');
                        }
                }
                else{
                        echo "Hamarino tsara ny isan'ny fanafody nampidirinao";
                        // header('location:tableau.php?erreur_isa=true');
                }
        }
        else{
                echo "Tsy maintsy fenoina daholo!";
                //header('location:tableau.php?erreur=true');
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
        echo true;
        $nbr_ligne = count($tab);
        $_SESSION["tab"] = $tab;
        $_SESSION["nbr"] = $nbr_ligne;

        }
}


//recherche de fanafody-----------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['btnmitad']))
{
        if  ( (!empty($_POST['fanaf_recherche']) ))
        {
                $fanafody = ($_POST['fanaf_recherche']);
                $query = new Query_bdd;
                $appel_mitady = $query->recherche($fanafody);
                $tabr = array();
                $i = 0;
                while($donne = $appel_mitady->fetch()){
                        $tabr[$i] = $donne;
                        $i++;
                }
                echo json_encode($tabr);
        }
        else{
                header('location:tableau.php?erreur_recherche=true');
        }
}



//hamandrika fanafody-----------------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['fandrika']))
{
        if  ((!empty($_POST['an_mp']) and (!empty($_POST['fan_mp']) and  (!empty($_POST['kara_mp']) and (!empty($_POST['adr_mp']) and (!empty($_POST['find_mp']) and (!empty($_POST['an_fn']) and (!empty($_POST['isa_fn'])  ))))))))
        {
                if ( (intval(($_POST['kara_mp']))) and ((strlen($_POST['kara_mp'])) == 14))
                {
                        if ( (intval(($_POST['find_mp']))) and ((strlen($_POST['find_mp'])) == 10 ))
                        {
                                if ( intval(($_POST['isa_fn'])))
                                {
                                        $an_mp = ($_POST['an_mp']);
                                        $fan_mp = ($_POST['fan_mp']);
                                        $kara_mp = ($_POST['kara_mp']);
                                        $adr_mp = ($_POST['adr_mp']);
                                        $find_mp = ($_POST['find_mp']);
                                        $an_fn = ($_POST['an_fn']);
                                        $isa_fn = ($_POST['isa_fn']);
                                        echo($an_mp);
                                        echo($fan_mp);
                                        echo($kara_mp);
                                        echo($adr_mp);
                                        echo($find_mp);
                                        echo($an_fn);
                                        echo($isa_fn);
                                        die;
                                        // $query = new Query_bdd;
                                        // $appel_hamandrika = $query->hamandrika($ref, $anarana);
                                }
                                else{
                                        echo "Hamarino tsara ny isan'ny fanafody nampidirinao";
                                }       
                        }        
                        else{
                                echo "Hamarino tsara ny laharan'ny findainao";
                        }
                }             
                else{
                        echo "Hamarino tsara ny laharan'ny kara-panondronao";
                }
        }
        else{
                echo "Tsy maintsy fenoina daholo ny banga";
        }                                              
}

//deconnexion----------------------------------------------------------------------------------------------------------------------------------
if (isset($_GET['deconnection'])) {
        session_start();
        $_SESSION = array ();
        session_destroy();
        header('location:index.php');

}