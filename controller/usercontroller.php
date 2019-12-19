<?php
session_start();
require_once '../model/usermodel.php';

if (isset($_POST['connexion']))
{
    # code...
    extract($_POST);
    $psw =$_POST['psw'];
    $email =$_POST['email'];
    $user = getcCnnexion($email, $psw);
    if ($user != NULL) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['psw'] = $user['psw'];
        header("location:acceuil");
    } else {
        header("location:../index.php?connexion=0");
    }
}

if ((isset($_GET['logout'])) && $_GET['logout'] == 1) {
    session_unset();
    $_SESSION = array();
    header("location:index.php");
}
