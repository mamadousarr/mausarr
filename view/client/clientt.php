<!doctype html>
<html >
<meta charset="UTF-8">
<title>COMPTE</title>

<link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css"></link>
</head>
<body>
<div class="nav navbar-prymary" >
    <div class="btn-group btn-group-justified">
    <ul class="nav navbar-nav">
        <li><a href="clients" class="btn-primary">RETOUR</a></li>
        <li><a href="acceuil" class="btn-primary">ACCEUIL</a></li>

    </ul>
</div>
</div>
<div class="panel-success">
    <div class="panel-heading" align="center">LISTE DES CLIENTS</div>
    <div class="panel-body">
        <table class="table table-bordered table-hover table-striped"class="table table-bordered table-hover table-striped">
            <tr align="center" >
                <td>IDCLIENT</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>TELEPHONE</td>
                <td>ACTION</td>
            </tr>
            <?php
            require_once '../../model/clientdb.php';
            $client=listeclient() ->fetchAll();
            foreach ($client as $key =>$value){
                echo "<tr align='center'>
            <td>$value[0]</td>
            <td>$value[1]</td>
            <td>$value[2]</td>
            <td>$value[3]</td>
            <td><a href=\"cl?IdCl=$value[0]\" class=\"btn-primary\">supprimer</a></td>
            

                    </tr>";
            }

            ?>
        </table>
    </div>
    <div class="panel-footer">LA BANQUE DU PEUPLE</div>
</div>


</body>
</html>