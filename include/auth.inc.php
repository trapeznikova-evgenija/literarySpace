<?php

function isAdmin($username)
{
    if ($username == 'admin') {
        return true;
    }

    return false;
}

function getPasswordFromDb($username)
{
    $username = dbQuote($username);
    echo "SELECT user.password FROM user WHERE user.username = '{$username}'";
    return dbQueryGetResult("SELECT user.password FROM user WHERE user.username = '{$username}'");
}

function checkPassword($password, $username)
{
    $userPassword = getPasswordFromDb($username);
    $userPassword = getFirstElement($userPassword);
    echo $userPassword;

    if ($userPassword == md5($password))
    {
        return true;
    }

    return false;
}