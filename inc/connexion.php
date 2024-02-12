<?php
    function dbConnect(){
        static $connexion = null;
        if ($connexion === null) {
            $PARAM_hote='localhost'; // le chemin vers le serveur
            $PARAM_port='3306';
            $PARAM_nom_bd='theerie'; // le nom de votre base de données
            $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
            $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
            try{
                $connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
            }catch(Exception $e){
                echo 'Erreur : '.$e->getMessage().'<br />';
                echo 'N° : '.$e->getCode();
            }
        }
        return $connexion;
    }
?>