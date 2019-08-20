<?php 

class connect_bdd{
          protected function dbconnect(){
                    $bdd = new PDO('mysql:host=localhost;dbname=Pharmacetica' ,'sserver', 'sserver') or die ();
                    return $bdd;
          }
}
class Query_bdd extends connect_bdd{
        
          public function verification($usr, $mdp) {
                    $bdd = $this->dbconnect();
                    $verifier = $bdd->prepare("SELECT 1 from Admin_admin where username = ? and passwd = ?");
                    $verifier->execute(array($usr, $mdp));
                    return $verifier->rowCount();
          }
  }

?>