<?php 
    session_start();
    include "../../inc/fonction.php";

    header("Content-Type: application/json");

    $nom=$_POST['nom'];
    $occupation=$_POST['occupation'];
    $rendement=$_POST['rendement'];
    $rep=insertVariete($nom,$occupation,$rendement);
    echo json_encode($rep);
?>