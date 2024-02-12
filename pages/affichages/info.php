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
  <title>Formulaire de Variete</title>
</head>
<body>

<div class="container-fluid formulaire">
    <form id="formulaireVariete" method="get">
        <div class="form-group">
            <label for="nom">Nom </label>
            <input id="nom" class="form-control" type="text" name="nom">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation </label>
            <input id="occupation" class="form-control" type="number" name="occupation">
        </div>
        <div class="form-group">
            <label for="rendement">Rendement </label>
            <input id="rendement" class="form-control" type="number" name="rendement">
        </div>
      <button type="submit" class="btn btn-info validation">Valider</button>
    </form>
</div>
<script src="../../assets/js/variete.js"></script>
</body>
</html>