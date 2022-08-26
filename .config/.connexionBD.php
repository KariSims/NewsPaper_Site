<?php
    include (".configBD.php");

class linkDB{
    public function connexionBD(){

        global $host, $user, $passwd;

        try{
            $connex = new PDO($host, $user, $passwd);
            $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $connex->getAttribute(PDO::ATTR_CONNECTION_STATUS);

            return $connex;
        }
        catch(PDOException $error){
            die('Erreur de connexion : '.$error->getMessage());
        }
    }
}
/*?>*/