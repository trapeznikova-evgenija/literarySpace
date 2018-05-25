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
getFilter('authorCentury', 'century.id_century', $currentFilter);
//echo "empty " . $currentFilter . PHP_EOL;
getFilter('authorCountry', 'country.id_country', $currentFilter);
echo $currentFilter . PHP_EOL;
$authorGenresIdsArray = getRequestParameter("authorGenre");
echo '!!! ';
print_r($authorGenresIdsArray);
echo '!!!';
$authorGenresIdsArray = array_values($authorGenresIdsArray);
$idString = implode(',', $authorGenresIdsArray);
echo $idString . 'IDSTRINT' . PHP_EOL;

if ($idString)
{
    if ($currentFilter)
    {
        $currentFilter = "{$currentFilter} AND genre_writer.id_genre IN ({$idString})";
    } else
    {
        $currentFilter = "genre_writer.id_genre IN ({$idString})";
    }
}

$allWriter =  getFilterWriter($currentFilter);
print_r($allWriter);

//print_r($authorGenres);
//echo $centuryId . ' ' . $countryId;

echo getView('result_of_search.twig', array(
//    'allWriter' => $allWriter,
//    'years' => $yearsOfLifeArray,
//    'allPhoto' => $allWriterPhoto
));