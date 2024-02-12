<?php 
include("../../inc/fonction.php");
session_start();

echo "Nom : ".$_SESSION['user']['nom']."<br>";
echo " Prenom : ".$_SESSION['user']['prenom']."<br>";
echo " Email : ".$_SESSION['user']['email']."<br>";

$varietes=getListVariete();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <title>Formulaire de Parcelle</title>
</head>
<body>

<div class="container-fluid formulaire">
    <form id="formulaireParcelle" method="get">
        <div class="form-group">
            <label for="numero">Numero </label>
            <input id="numero" class="form-control" type="text" name="numero">
        </div>
        <div class="form-group">
            <label for="surface">Surface </label>
            <input id="surface" class="form-control" type="number" name="surface">
        </div>
        <div class="form-group">
            <label for="idVariete">Variete </label>
            <select class="form-control" name="idVariete">
                <?php 
                    while( $ligne = $varietes->fetch() ){ echo 'Utilisateur : '.$ligne->nom.'<br />';?>
                        <option value="<?php echo $ligne->idVariete; ?>"><?php echo $ligne->nom; ?></option> 
                    <?php }
                    $varietes->closeCursor();
                ?>
            </select>
        </div>
      <button type="submit" class="btn btn-info validation">Valider</button>
    </form>
</div>
<a href="./insertCueilleur.php">Inserer Cueilleur</a>
<a href="./insertParcelle.php">Inserer Parcelle</a>
<a href="./insertVariete.php">Inserer Variete</a>
<script src="../../assets/js/parcelle.js"></script>
</body>
</html>