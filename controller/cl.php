<?php
require_once '../model/clientdb.php';
require_once '../model/db.php';

if(isset($_GET['IdCl'])){
    $sql="delete from Client where IdCl=".$_GET['IdCl'];
    //$res= $db->exec($sql);
    //header("Location:formcli");
    header('Location:clientt');

}

?>