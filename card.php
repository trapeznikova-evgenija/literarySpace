<?php
require_once 'include/common.inc.php';
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();
//print_r(dbQueryGetResult('SELECT content FROM writer WHERE id_writer = 1'));
$data = dbQueryGetResult('SELECT * FROM writer WHERE id_writer = 1');
//print_r($data);
echo getView('card.twig', array('data' => $data));
