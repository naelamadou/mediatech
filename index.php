<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Mediatech</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>

<div id="login-page">
    <div class="container">

        <form class="form-login" method="post">
            <h2 class="form-login-heading">se connecter a mediaTechDynamique</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" name="login" placeholder="Entrer votre login" autofocus>
                <br>
                <input type="password" class="form-control" name="password" placeholder="Entrer votre Password" id="password">
                <label for="checkbox">
                    <input type="checkbox" id="checkbox"/>
                    Afficher le mot de passe
                </label>
                <script type="text/javascript" src="js/jquery.js"></script>
                <!--afficher mot de passe saisie avec javascript-->
                <script type="text/javascript">
                    $(document).ready(function(){
                        var checkbox = $("#checkbox");
                        var password = $("#password");
                        checkbox.click(function(){
                            if(checkbox.prop("checked")){
                                password.attr("type","text");
                            }else{
                                password.attr("type","password");
                            }
                        });
                    });
                </script>
                <br>

                <select class="form-control" placeholder="choisir un profil" name="profil" required>
                    <option></option>
                    <option value="admin">Administrateur</option>
                    <option value="user">Utilisateur</option>
                </select>
                <hr>
                <button class="btn btn-facebook btn-block" type="submit" name="connect"><i class="fa fa-lock" ></i>connexion</button>
        </form>
    </div>
</div>
<?php
include_once "pages/menusimple.php";
//require_once 'model/DB.php';
//include 'pages/connectedbd.php';
//session_start();
if (isset($_POST['connect'])) {// s'il clique sur Se connecter
     // importe les variables dans la tables de symboles
    include 'pages/connectedbd.php';
    extract($_POST);// inclusion de la page de connexion a la base de donnée
    if ($profil == "admin") {
        $exist = false;
        $resul = $mabase->query("SELECT login,password from admin");
        while ($donne = $resul->fetch()) {
            if ($donne['login'] == $login AND $donne['password'] == $password) {
                $exist = true;
                $_SESSION['login'] = $login;
                echo "$login";
                $_SESSION['password'] = $password;
               header('location:pages/menuadmin.php');

            }
        }
        if ($exist == false) {
            echo" login ou mot de passe incorrecte";
        }
    } else {
        $exist = false;
        $resul = $mabase->query("SELECT login,pwd from user");
        while ($donne = $resul->fetch()) {
            if ($donne['login'] == $login AND $donne['pwd'] == $password) {
                $exist = true;
                header('location:pages/accueil.php');
            }
        }
        if ($exist == false) {
            echo" login ou mot de passe incorrecte";
        }
    }
}
?>



<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("img/lions.jpg", {speed: 500});
</script>
</body>
</html>
