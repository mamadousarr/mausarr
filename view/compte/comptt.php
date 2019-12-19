
<!doctype html>
<html >
<meta charset="UTF-8">
<title>COMPTE</title>

<link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css"></link>
</head>
<body>
<div class="container " align="center">
<div class="nav navbar-prymary">
    <div class="btn-group btn-group-justified">
    <ul class="nav navbar-nav" >
        <li><a href="comptes" class="btn-primary">RETOUR</a></li>
        <li><a href="acceuil" class="btn-primary">ACCEUIL</a></li>
    </ul>
</div>
</div>
</div>

<div class="container " align="center">
    <div class="panel-danger">
        <div class="panel-primary" align="center">LISTE DES COMPTES</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover table-striped" >
                <tr align="center">
                    <td>NUMERO COMPTE</td>
                    <td>SOLDE</td>
                    <td>IDCLIENT</td>
                    <td>ACTIONS</td>




                </tr>
                <?php

                require_once '../../model/comptdb.php';
                $compte=listecompte() ->fetchAll();
                foreach ($compte as $key =>$value){
                    echo "<tr align='center'>
            <td>" . $value[0] . "</td>
            <td>" . $value[1] . "</td>
            <td>" . $value[2] . "</td>
    <td><a href='comptt?idclic=$value[2] ' class='btn btn-danger'>supprimer</a>
                       </td>
 
                    </tr>";
                }
                // <a href=' ' class='btn btn-primary'>modifier</a>
                ?>
                <script>
                    window.alert('est se que tu veus bient continuer');
                </script>

            </table>
        </div>
        <div class="panel-footer">LA BANQUE DU PEUPLE</div>
    </div>
</div>
</body>
</html>