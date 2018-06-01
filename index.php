<?php

require_once("include/common.inc.php");
dbInitialConnect();

$allGenre = getAllGenre();
$allCountry = getAllCountry();
$allCentury = getAllCentury();

echo getView('index.twig', array(
        'allGenre' => $allGenre,
        'allCountry' => $allCountry,
        'allCentury' => $allCentury
));

