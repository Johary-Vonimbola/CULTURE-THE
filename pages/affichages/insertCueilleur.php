<?php 
include("../../inc/fonction.php");
session_start();

echo "Nom : ".$_SESSION['user']['nom']."<br>";
echo " Prenom : ".$_SESSION['user']['prenom']."<br>";
echo " Email : ".$_SESSION['user']['email']."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <title>Formulaire de Cueilleur</title>
</head>
<body>

<div class="container-fluid formulaire">
    <form id="formulaireCueilleur" method="get">
        <div class="form-group">
            <label for="nom">Nom </label>
            <input id="nom" class="form-control" type="text" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom </label>
            <input id="prenom" class="form-control" type="text" name="prenom">
        </div>
        <div class="form-group">
            <label for="genre">Genre </label>
            <input id="genre" class="form-control" type="text" name="genre">
        </div>
        <div class="form-group">
            <label for="dateNaissance">Date de Naissance </label>
            <input id="dateNaissance" class="form-control" type="date" name="dateNaissance">
        </div>
      <button type="submit" class="btn btn-info validation">Valider</button>
    </form>
</div>
<a href="./insertCueilleur.php">Inserer Cueilleur</a>
<a href="./insertParcelle.php">Inserer Parcelle</a>
<a href="./insertVariete.php">Inserer Variete</a>
<script src="../../assets/js/cueilleur.js"></script>
</body>
</html>