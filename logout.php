<?php
require_once('include/common.inc.php');
require_once('session.inc.php');
session_start();
deleteUserFromSession();
header('Location: index.php');