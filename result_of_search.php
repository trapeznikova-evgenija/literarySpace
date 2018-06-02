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

$currentFilter = '';
getFilter('authorCentury', 'century.id_century', $currentFilter);
getFilter('authorCountry', 'country.id_country', $currentFilter);

$authorGenresIdsArray = getRequestParameter("authorGenre");
$authorGenresIdsArray = array_values($authorGenresIdsArray);
$idString = implode(',', $authorGenresIdsArray);
$stringOfUserFilter =  getStringOfUserFilter();

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

echo getView('result_of_search.twig', array(
    'allWriter' => $allWriter,
    'filterString' => $stringOfUserFilter
));