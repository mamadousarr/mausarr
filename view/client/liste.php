<!doctype html>
<html >
    <meta charset="UTF-8">
    <title>COMPTE</title>

    <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css"></link>
</head>
<body>

<div class="container">
    <div class="btn-group btn-group-justified">
    <ul class="nav navbar-nav">
        <li><a href="clients" class="btn btn-primary" >GESTION DES CLIENTS</a></li>
        <li><a href="comptes" class="btn btn-primary">GESTION DES COMPTES</a></li>
        <li><a href="clientt" class="btn btn-primary">LISTE DES CLIENTS</a></li>
        <li><a href="acceuil" class="btn btn-primary">ACCEUIL</a></li>
    </ul>
</div>


    <div class="panel-success">
        <div class="panel-primary" align="center">FORMULAIRE D'AJOUT DE CLIENT</div>
        <div class="panel-body">
            <form action="clientcontroller" method="post">
                <div class="form-group">
                    <label class="control-label" for="Nom">Nom</label>
                    <input class="form-control" type="text" name="Nom" id="Nom">
                </div>
                <div>
                    <label class="control-label" for="Prenom">Prenom</label>
                    <input class="form-control" type="text" name="Prenom" id="Prenom">
                </div>
                <div class="form-group">
                    <label class="control-label" for="Adresse">Adresse</label>
                    <input class="form-control" type="text" name="Adresse" id="Adresse">
                </div>
                <div class="form-group">
                    <label class="control-label" for="Tel">Tel</label>
                    <input class="form-control" type="number" name="Tel" id="Tel">
                </div>
                <div class="btn-group btn-group-lg" >
                    <input class="btn btn-success" type="submit" name="enregistrer" id="enregistrer" value="Enregistrer"/>
                    <input class="btn btn-primary" type="reset" name="annuler" id="annuler" value="Annuler">
                </div>
            </form>
        </div>
        <div class="panel-footer">LA BANQUE DU PEUPLE</div>
    </div>

</body>
</html>