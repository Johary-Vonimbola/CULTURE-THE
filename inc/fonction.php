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

	function isAdmin($email,$password){
		$personne=checkLogin($email,$password);
		return $personne!=null && $personne['status']=='admin';
	}

	function getListVariete(){
		$rep=dbConnect()->query("SELECT * from variete");
		$rep->setFetchMode(PDO::FETCH_OBJ);
		return $rep;
	}
	function insertVariete($nom, $occupation, $rendement) {
		$query = dbConnect()->prepare("INSERT INTO variete VALUES (DEFAULT, :nomThe, :occupationThe, :rendementThe)");
		$query->execute(array('nomThe' => $nom, 'occupationThe' => $occupation, 'rendementThe' => $rendement));
		$rep = $query->rowCount();
		return $rep;
	}

	function insertParcelle($numero, $surface, $idvariete) {
		$query = dbConnect()->prepare("INSERT INTO parcelle VALUES (DEFAULT, :numeroParcelle, :surfaceParcelle, :idvarieteParcelle)");
		$query->execute(array('numeroParcelle' => $numero, 'surfaceParcelle' => $surface, 'idvarieteParcelle' => $idvariete));
		$rep = $query->rowCount();
		return $rep;
	}	

	function insertCueilleur($nom, $prenom, $genre,$dateNaissance) {
		$query = dbConnect()->prepare("INSERT INTO cueilleur VALUES (DEFAULT, :nomCueilleur, :prenomCueilleur, :genreCueilleur, :dateNaissanceCueilleur)");
		$query->execute(array('nomCueilleur' => $nom, 'prenomCueilleur' => $prenom, 'genreCueilleur' => $genre,'dateNaissanceCueilleur' => $dateNaissance));
		$rep = $query->rowCount();
		return $rep;
	}	
?>