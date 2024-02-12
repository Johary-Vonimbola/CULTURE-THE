<?php 
    session_start();
    include "../../inc/fonction.php";

    header("Content-Type: application/json");

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $genre=$_POST['genre'];
    $dateNaissance=$_POST['dateNaissance'];
    $rep=insertCueilleur($nom,$prenom,$genre,$dateNaissance);
    echo json_encode($rep);
?>