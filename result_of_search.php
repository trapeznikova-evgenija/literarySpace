<?php
require_once("include/common.inc.php");
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();

$allWriter = getAllWriter();
$yearsOfLifeArray = array();

foreach ($allWriter as $writer) {
    $id_writer = $writer['id_writer'];
    $yearsOfLifeArray[$id_writer] = getYearsOfLife($id_writer);
    insertYearsInWriterTable($id_writer, $yearsOfLifeArray);
}

$allWriter[] = $yearsOfLifeArray;
$allWriter = getAllWriter();
$allWriterPhoto = getAllMainWriterPicture();

$century = getRequestParameter("authorCentury");
$country = getRequestParameter("authorCountry");
$authorGenres = getRequestParameter("authorGenre");

echo $century . ' ' . $country . ' ';
print_r($authorGenres);

$idGenres = array_values($authorGenres);
$idGenresString = implode($idGenres);
echo 'idGenresString ' . $idGenresString;

//echo 'century ' . $century;
//$filterString = getFilter()


echo getView('result_of_search.twig', array(
    'allWriter' => $allWriter,
    'years' => $yearsOfLifeArray,
    'allPhoto' => $allWriterPhoto
));