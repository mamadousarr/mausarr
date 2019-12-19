<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <title>COMPTE</title>
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css"></link>

</head>
<body class="panel-primary">
<div class="centenr">
<div class="nav navbar-prymary" >
    <div class="btn-group btn-group-justified">
    <ul class="nav navbar-nav" >
        <li><a href="clients" class="btn-primary" >GESTION DES CLIENTS</a></li>
        <li><a href="comptes"  class="btn-primary">GESTION DES COMPTES</a></li>
        <li><a href="comptt"  class="btn-primary">LISTE DES COMPTES</a></li>
        <li><a href="acceuil"  class="btn-primary">ACCEUIL</a></li>
    </ul>
</div>
</div>
</div>

    <div class="panel-danger">
        <div class="panel-primary" align="center">FORMULAIRE D'AJOUT DE COMPTE</div>
        <div class="panel-body">
            <form action="comptecontroller" method="POST">
                <div class="form-group">
                    <label class="control-label" for="NumCompte">NumCompte</label>
                    <input class="form-control" type="" name="NumCompte" id="NumCompte">
                </div>
                <div  class="form-group">
                    <label class="control-label"  for="Solde">Solde</label>
                    <input class="form-control" type="" name="Solde" id="Solde">
                </div>
                <div class="form-group">
                    <label class="control-label" for="Client">idclic</label>
                    <select class="form-control" name="idclic" id="idclic">
                        <option class="form-control" value="">faite votre choix</option>
<?php
require_once '../../model/clientdb.php';
$client=listeclient() ->fetchAll();
foreach ($client as $key =>$value) {
    echo "<option value='".$value[0]."'>$value[0]</option>";
}
    ?>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
                    <input class="btn btn-primary" type="reset" name="annuler" id="annuler" value="Annuler">
                </div>
            </form>
        </div>
        <div class="panel-footer">LA BANQUE DU PEUPLE</div>
    </div>

</body>
</html>