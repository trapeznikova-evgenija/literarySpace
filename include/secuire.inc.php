<?php
function requireAuth()
{
    $userId = $_SESSION['user_id'] ?? null;

    if (empty($userId)) {
        header('Location: index.php');
    }
}