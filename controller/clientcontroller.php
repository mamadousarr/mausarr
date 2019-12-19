<?php/*
require_once '../model/clientdb.php';
 extract($_POST);
 //extract nous faclilite les choses a ne pa etre la a ecrrir $date=$_POST['date']
$result=addclient($IdCl,$Nom,$Prenom,$Adresse,$Tel);
header("Location:formcli");*/
require_once '../model/clientdb.php';
require_once '../model/db.php';

if(isset($_GET['IdCl'])){
    $sql="delete from Client where IdCl=".$_GET['IdCl'];
    //$res= $db->exec($sql);
    //header("Location:formcli");
    //header('Location:clientt');

}
?>