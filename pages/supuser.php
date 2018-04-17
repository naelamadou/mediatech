<!--traitement de modification-->
<?php
// include_once "menusimple.php";
if(isset($_GET['id'])){
    try {
        $id = $_GET['id'];
        extract($_POST);
        include 'connectedbd.php';// inclusion de la page de connexion a la base de donnée
        $resul=$mabase->query("DELETE FROM user WHERE id = $id");
        header('location:utilisateur.php');
    }
    catch(PDOException $e)
    {
        echo "erreur de suppression" . $e->getMessage();
    }

}
?>