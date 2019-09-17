<?php

class connect_bdd{
          protected function dbconnect(){
                    $bdd = new PDO('mysql:host=localhost;dbname=Pharmacetica' ,'gaetan', 'gaetan') or die ('Not connected');
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
        public function verif_refana($id, $nom){
                $bdd = $this->dbconnect();
                $verif_refana =  $bdd->query("SELECT 1 from produit WHERE id = '$id' or nom = '$nom' ");
                return  $verif_refana;
        }
        public function hanova_fanafody($id, $nbr, $puni){
                $bdd = $this->dbconnect();
                $hanov_f =  $bdd->query("UPDATE produit SET  nombre='$nbr', prix_unit='$puni' WHERE id = '$id' ");
                return  $hanov_f;
        }
        public function hamandrika($id, $nbr, $puni){
                $bdd = $this->dbconnect();
                $hamandrika_f =  $bdd->query("UPDATE produit SET  nombre='$nbr', prix_unit='$puni' WHERE id = '$id' ");
                return  $hamandrika_f;
        }
        public function recherche($nom, $nbr, $puni){
                $bdd = $this->dbconnect();
                $mitady =  $bdd->query("SELECT nom, nombre, prix_unit from produit WHERE nom like '$nom%' ");
                return  $mitady;
        }

        public function ijery_fanafody(){
                $bdd = $this->dbconnect();
                $ijery =  $bdd->query("SELECT nom from produit ");
                return  $ijery;
        }
}
