<?php
require_once('include/common.inc.php');
require_once('include/auth.inc.php');

echo getView('add_writer.twig', array());

//print_r($_POST);
//$username = getPostParameter('userName');
//$password = getPostParameter('userPassword');
//
//if (isAdmin($username)) {
//    if (checkPassword($password, $username))
//    {
//        echo 'Это точно админ'  . PHP_EOL;
//
//    } else
//    {
//        echo 'Это может быть админ!' . PHP_EOL;
//    }
//
//} else {
//    echo 'Неавторизованный пользователь';
//}