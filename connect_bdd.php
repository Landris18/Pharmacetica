<?php 

class connect_bdd{
          protected function dbconnect(){
                    $bdd = new PDO('mysql:host=localhost;dbname=Pharmacetica' ,'sserver', 'sserver') or die ('Not connected');
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
        public function insertion($ref,  $nom, $nbr, $puni) {
                $bdd = $this->dbconnect();
                $ajouter =  $bdd->prepare( "INSERT INTO produit(id, nom, prix_unit, nombre) values(? , ? , ? , ?)");
                $ajouter->execute(array($ref, $nom, $puni, $nbr));        
                return $ajouter;
        }
        public function misintona() {
                $bdd = $this->dbconnect();
                $misintona_fanafody =  $bdd->query( "SELECT  id, nom, prix_unit, nombre from produit");   
                return $misintona_fanafody;
        }
        public function mamafa($id) {
                $bdd = $this->dbconnect();
                $mamafa_fanafody =  $bdd->query( "DELETE from produit where id= '$id' ");   
                return $mamafa_fanafody;
        }
}


