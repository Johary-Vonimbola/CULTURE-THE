<?php 
    session_start();
    include "../../inc/fonction.php";

    header("Content-Type: application/json");

    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $user=checkLogin($email,$mdp);
    $reponse="";
    if ($user!=NULL) {
        $_SESSION['user']=$user;
        $reponse="success";
    }else{
        $reponse="failed";
    }
    echo json_encode($reponse);
?>