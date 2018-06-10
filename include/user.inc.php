<?php
function getUserIdFromDb($login, $password)
{
    $login = dbQuote($login);
    $password = md5($password);
    $password = dbQuote($password);
    echo "SELECT * FROM user WHERE user.username = '{$login}' AND user.password = '{$password}'";
    return dbQueryGetResult("SELECT * FROM user WHERE user.username = '{$login}' AND user.password = '{$password}'");
}


function findUserByLoginPass($login, $password)
{
    $userInfo = getUserIdFromDb($login, $password);
    print_r($userInfo);

    if (!empty($userInfo)) {
        return $userInfo;
    }
    return '';
}

function autentificateUser($userInfo)
{
    print_r($userInfo);
    saveUserToSession($userInfo);
}

function findUserById($userId)
{
    return dbQueryGetResult("SELECT * FROM user WHERE user.id_user = {$userId}");
}