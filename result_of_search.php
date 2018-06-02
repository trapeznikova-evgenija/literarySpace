<?php
require_once("include/common.inc.php");

$currentFilter = '';
getFilter('authorCentury', 'century.id_century', $currentFilter);
getFilter('authorCountry', 'country.id_country', $currentFilter);
filterByGenre($currentFilter);

$filteringWriter = getFilterWriter($currentFilter);

addYearsOfLifeString($filteringWriter);
$stringOfUserFilter = getStringOfUserFilter();

echo getView('result_of_search.twig', array(
    'allWriter' => $filteringWriter,
    'filterString' => $stringOfUserFilter
));