<?php
echo "Lalo";
require_once ("include/common.inc.php");


$vars = array(
    'name' => 'Stephen King',
    'books' => array(
        'Pet Sematary', 'Christine', 'Needful Things'));
echo getView('index.twig', $vars);
