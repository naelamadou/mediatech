<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Client</title>
    <link rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
</head>
<body>
<?php
include 'menusimple2.php';
?>
<br><br><br>
<div class="container col-md-6 col-md-offset-3 ">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'inscription</div>
        <div class="panel-body">
            <form method="POST" action="inscription.php">
                <div class="form-group">
                    <label class="control-label" >Nom</label>
                    <input class="form-control" type="text" name="nom"/>
                </div>
                <div class="form-group">
                    <label class="control-label" >Login</label>
                    <input class="form-control" type="text" name="login"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="password" name="pwd"/>
                </div>
                <div class="form-group">
                    <label class="control-label">telephone</label>
                    <input class="form-control" type="text" name="telephone"/>
                </div>
                <div class="form-group">
                    <label class="control-label">adresse</label>
                    <input class="form-control" type="text" name="adresse"/>
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once "
menusimple.php";
if(isset($_POST['valider'])){
    try {
        extract($_POST);
        $profil="utilisateur";
        include 'connectedbd.php';// inclusion de la page de connexion a la base de donnée
        $resul=$mabase->query("INSERT INTO user(nom,login,pwd,profil,telephone,adresse) values('$nom','$login','$pwd','$profil','$telephone','$adresse')");
        header('location:../index.php');
    }
    catch(PDOException $e)
    {
        echo "ko inserttion" . $e->getMessage();
    }

}
?>
</body>
</html>
