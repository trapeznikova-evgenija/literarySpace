<?php
function saveUserToSession($userInfo)
{
    if (!$userInfo) {
        return;
    }

    $_SESSION['user_id'] = $userInfo['id_user'];
}

function deleteUserFromSession()
{
    if (!empty($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }
}
