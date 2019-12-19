<?php
require_once 'db.php';
function addclient($IdCl,$Nom,$Prenom,$Adresse,$Tel)
{
    $sql = "insert into Client values(null,'$Nom','$Prenom','$Adresse',$Tel)";

    $conn = getcCnnexion();

    return $conn->exec($sql);
}
function listeclient()
{
    $sql = "SELECT *FROM Client";

    $conn = getcCnnexion();

    return $conn->query($sql);
}
?>