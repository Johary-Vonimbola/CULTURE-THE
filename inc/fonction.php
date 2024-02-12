<?php
include("connexion.php");
	function crypter($mdp){  
        $query=dbConnect()->prepare("SELECT sha1(:pwd) as crypt"); 
        $query->execute(array('pwd' => $mdp));
        $rep=$query->fetch(PDO::FETCH_ASSOC);
        return $rep['crypt'];
	}

	function checkLogin($email,$password){
		$query=dbConnect()->prepare("SELECT * from user WHERE email=:email AND password=:pwd");
		$query->execute(array('email' => $email,'pwd' => crypter($password)));
        $rep=$query->fetch(PDO::FETCH_ASSOC);
		return $rep;
	}

	function insertVariete($nom, $occupation, $rendement) {
		$query = dbConnect()->prepare("INSERT INTO variete VALUES (DEFAULT, :nomThe, :occupationThe, :rendementThe)");
		$query->execute(array('nomThe' => $nom, 'occupationThe' => $occupation, 'rendementThe' => $rendement));
		$rep = $query->rowCount(); // Utilisez rowCount() pour obtenir le nombre de lignes affectées par l'opération d'insertion
		return $rep;
	}
	
?>