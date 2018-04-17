<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br><br><br><br>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste des Utilisateurs</div>
        <div class="panel-body">
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <?php
                include 'menuadmin.php';
                include 'connectedbd.php';
                $req=$mabase->query("SELECT * FROM user");
                while ($res=$req->fetch()) {
                    $id = $res['id'];
                    ?>
                    <tr>
                        <td> <?php echo $res['id']?> </td>
                        <td> <?php echo $res['nom']?> </td>
                        <td> <?php echo $res['login']?> </td>
                        <td> <?php echo $res['pwd']?> </td>
                        <td> <?php echo $res['telephone']?> </td>
                        <td> <?php echo $res['adresse']?> </td>
                        <td><?php echo" <a href=\"modifuser.php?id= $id\" >Modifier</a>";?> </td>
                        <td><?php echo" <a onclick=\"return confirm('voulez-vous reellement supprimer');\" href=\"supuser.php?id= $id\" >Supprimer</a>";?> </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>