<!--traitement de modification-->
<?php
// include_once "menusimple.php";
if(isset($_POST['Modifier'])){
    try {
        extract($_POST);
        include 'connectedbd.php';// inclusion de la page de connexion a la base de donnée
        $resul=$mabase->query("UPDATE user SET nom ='$nom',login ='$login',pwd ='$pwd',telephone ='$telephone',adresse ='$adresse' WHERE id =$id");
        header('location:utilisateur.php');
    }
    catch(PDOException $e)
    {
        echo "erreur de modification" . $e->getMessage();
    }

}
?>