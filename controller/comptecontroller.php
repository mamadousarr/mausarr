<?php
require_once '../model/comptdb.php';
extract($_POST);
$resule=addcompte($NumCompte,$Solde,$idclic);
   header("Location:formcompt");
 /*

require_once '../model/db.php';
if (isset($_GET['NumCompt']))
{

   //$res=deletcmp($_GET['NumCompt']);
    global $db;
    $sql="DELETE FROM compte WHERE id ='".$_GET['NumCompt']."' ";
    var_dump($sql);
    $res= $db->exec($sql);
    //header("Location:comptes");

   $res=deletcompte($_GET['NumCompt']);
   if ($res==1){
    header("Location:comptes");

}

*/
?>