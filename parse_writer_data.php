<?php
require_once('include/common.inc.php');
$textDataArray = $_POST;
$imagesDataArray = uploadImages();

addNewWriterToDb($textDataArray, $imagesDataArray);

