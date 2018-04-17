<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>menu</title>
    <link rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>

</head>
<style>
    #modif{
        background-color: #ffcf00;
        font-size: larger;
    }
</style>
<body>
<div class="nav navbar-inverse navbar-fixed-top " >
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">Gestion Utilisateur<b
                            class="caret"></b></a>
                <ul class="dropdown-menu" id="modif">
                    <li><a href="utilisateur.php">lister les utilisateurs</a></li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <a href="../index.php" class="btn btn-danger navbar-btn navbar-right">Deconnexion</a>
        </div>
    </div>
</div>
<br><br><br>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="../js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("../img/lions.jpg", {speed: 500});
</script>
</body>
</html>