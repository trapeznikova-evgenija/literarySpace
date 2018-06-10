<?php
require_once('include/common.inc.php');
require_once('include/auth.inc.php');
require_once('include/user.inc.php');
require_once('include/session.inc.php');

session_start();
$username = getPostParameter('userName');
$password = getPostParameter('userPassword');

if (isAdmin($username)) {
    if (checkPassword($password, $username)) {
        //echo true;
        $userInfo = findUserByLoginPass($username, $password);
        print_r($userInfo);
        $userInfo = $userInfo[0];
        autentificateUser($userInfo);

        $enterAdminPanel = true;

    } else {
        //echo false;
        $enterAdminPanel = false;
    }

} else {
    //echo false;
    $enterAdminPanel = false;
}

echo $enterAdminPanel;