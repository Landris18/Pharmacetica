<?php
$oFileInfos = $_FILES["fichier_image"];
                $pdp_name= $oFileInfos["name"];
                $pdp_name = str_replace(' ', '_', $pdp_name);
                $pdp_temporaire = $oFileInfos["tmp_name"];
                $code_erreur = $oFileInfos["error"];
                $destination = "./stockage/pic.png";


                switch($code_erreur)
    {
        case UPLOAD_ERR_OK:
            if(copy($pdp_temporaire, $destination)){
                //$verify_insertion = $query_bdd->insertion_fichier_pdp($id, $pdp_name, $action);
                require('connect_bdd.php');

                $query = new Query_bdd();
                $decode = exec('python qrd.py');
                 echo $decode;

            }
            else{
                throw new Exception("Erreur copie fichier");
            }
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new Exception("Aucun fichier séléctionner");
            break;
        case UPLOAD_ERR_INI_SIZE:
            throw new Exception("Taille fichier > upload_max_filesize");
            break;
        case UPLOAD_ERR_PARTIAL:
            throw new Exception("Fichier partiellement transféré");
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            throw new Exception("Aucun répertoire temporaire");
            break;
        case UPLOAD_ERR_CANT_WRITE:
            throw new Exception("Erreur lors de l’écriture du fichier sur disque");
            break;
        default:
            throw new Exception("Fichier non transféré");
            break;
    }
    if($verify_insertion === false){
        throw new Exception("Erreur insertion fichier");
        echo 'allo';
    }
    else{
        echo "Succed";
    }
?>
