<?php
/*
function getcCnnexion(){

    try {
        $db = new PDO('mysql:host=localhost;dbname=banquedupeuple', 'root', '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    } catch (Exception $e) {
        die("CONNEXION INTERROMPU !");
    }
    }
?>
*/
function getcCnnexion(){
    $host ='localhost';
    $user ='root';
    $password='';
    $dbname='BanqueDuPeuple';

    $dsn ="mysql:host=$host;dbname=$dbname";
    try{
        $db=new PDO($dsn,$user,$password);

    }catch (PDOException $ex)
    {
        die('Error :'.$ex->getMessage());
    }
    return $db;
}
?>