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
        $userInfo = findUserByLoginPass($username, $password);
        $userInfo = $userInfo[0];
        autentificateUser($userInfo);
        $enterAdminPanel = true;

    } else {
        $enterAdminPanel = false;
    }

} else {
    $enterAdminPanel = false;
}

echo $enterAdminPanel;