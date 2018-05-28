<?php
require_once 'include/common.inc.php';
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();

echo getView('add_writer.twig', array() );

