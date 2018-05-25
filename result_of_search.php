<?php
require_once("include/common.inc.php");
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();

//$allWriter = getAllWriter();
//$yearsOfLifeArray = array();

//foreach ($allWriter as $writer) {
//    $id_writer = $writer['id_writer'];
//    $yearsOfLifeArray[$id_writer] = getYearsOfLife($id_writer);
//    insertYearsInWriterTable($id_writer, $yearsOfLifeArray);
//}

//$allWriter[] = $yearsOfLifeArray;
//$allWriter = getAllWriter();
//$allWriterPhoto = getAllMainWriterPicture();

//$centuryId = getRequestParameter("authorCentury");
//$countryId = getRequestParameter("authorCountry");
//print_r($authorGenresIdsArray);

//$allWriter = getFilterWriter($centuryId, $countryId, $authorGenresIdsArray);

$currentFilter = '';
getFilter('authorCentury', 'id_century', $currentFilter);
getFilter('authorCountry', 'id_country', $currentFilter);
$authorGenresIdsArray = getRequestParameter("authorGenre");
if ($authorGenresIdsArray)
{
    
}

//print_r($authorGenres);
//echo $centuryId . ' ' . $countryId;

echo getView('result_of_search.twig', array(
    'allWriter' => $allWriter,
//    'years' => $yearsOfLifeArray,
//    'allPhoto' => $allWriterPhoto
));