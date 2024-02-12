<?php 
    session_start();
    include "../../inc/fonction.php";

    header("Content-Type: application/json");

    $numero=$_POST['numero'];
    $surface=$_POST['surface'];
    $idvariete=$_POST['idVariete'];
    $rep=insertParcelle($numero,$surface,$idvariete);
    echo json_encode($rep);
?>