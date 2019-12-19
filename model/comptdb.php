<?php
require_once 'db.php';
function addcompte($NumCompte,$Solde,$idclic)
{
    $sql = "insert into Compte values($NumCompte,$Solde,$idclic)";

    $conn = getcCnnexion();

    return $conn->exec($sql);
}
function updatecompt($idclic,$Solde){
    $sql="UPDATE  compte SET Solde=$Solde where  idclic=$idclic";

    $conn=getcCnnexion();

    return $conn->exec($sql);
}

function listecompte()
{
    $sql = "SELECT *FROM Compte";

    $conn = getcCnnexion();

    return $conn->query($sql);

}



function deletcmp($NumCompte){
    $req="DELETE compte where  NumCompt= $NumCompte";
global $db;
return($db)->exec($req);
}
?>