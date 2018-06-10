<?php
require_once('include/common.inc.php');
require_once('include/auth.inc.php');

session_start();
$enterAdminPanel = false;



$username = getPostParameter('userName');
$password = getPostParameter('userPassword');

if (isAdmin($username)) {
    if (checkPassword($password, $username)) {
        //echo true;
        $enterAdminPanel = true;

    } else {
        //echo false;
        $enterAdminPanel = false;
    }

} else {
    //echo false;
    $enterAdminPanel = false;
}