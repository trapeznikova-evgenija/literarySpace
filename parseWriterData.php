<?php
require_once 'include/common.inc.php';
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();

$textDataArray = $_POST;
$imagesDataArray = $_FILES;

uploadImages($imagesDataArray);

//print_r($_POST);
//print_r($_FILES);


