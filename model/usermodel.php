<?php
require_once 'db.php';

function getcCnnexion($email, $psw)
{
    global $db;
    $request = "SELECT * FROM user WHERE email='$email' AND psw='$psw'";
    return $db->query($request)->fetch();
}
?>
