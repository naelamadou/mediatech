


<?php
include 'Tmodifuser.php';
include 'connectedbd.php';
include "menuadmin.php";
//echo $_GET['id'];
$id= $_GET['id'];
if(isset($_GET['id'])){
    var_dump(id);
    $idc= $_GET['id'];
    $req=$mabase->query("SELECT * FROM user WHERE id=$id");
    while($row = $req-> fetch()){
    ?>
        <div class="container col-md-6 col-md-offset-3 ">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire de modification</div>
                <div class="panel-body">
                    <form method="POST" action="Tmodifuser.php">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <label class="control-label" >Nom</label>
                            <input class="form-control" type="text" name="nom" value="<?= $row['nom']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Login</label>
                            <input class="form-control" type="text" name="login" value="<?=$row['login']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="text" name="pwd" value="<?=$row['pwd']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">telephone</label>
                            <input class="form-control" type="text" name="telephone" value="<?=$row['telephone']?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">adresse</label>
                            <input class="form-control" type="text" name="adresse" value="<?=$row['adresse']?>"/>
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" name="Modifier" value="Modifier"/>
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
    }
}
?>