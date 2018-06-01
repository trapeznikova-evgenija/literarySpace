<?php
function getFilterWriter($filterString)
{
    return dbQueryGetResult("SELECT DISTINCT writer.*, country.name as country_name, main_writer_picture.filename
                                   FROM writer
                                   INNER JOIN genre_writer ON writer.id_writer = genre_writer.id_writer
                                   INNER JOIN genre ON genre_writer.id_genre = genre.id_genre
                                   INNER JOIN century ON writer.id_century = century.id_century
                                   INNER JOIN main_writer_picture ON writer.id_writer = main_writer_picture.id_writer
                                   INNER JOIN country ON writer.id_country = country.id_country 
                                   WHERE {$filterString}"
    );
}

function getFilter($requestKey, $columnName, $currentFilter) : string
{
    global $currentFilter;
    $filter = getRequestParameter($requestKey);

    if ($filter) {

        if ($currentFilter) {
            $currentFilter = "{$currentFilter} AND {$columnName} = {$filter}";
        } else {
            $currentFilter = "{$columnName} = {$filter}";
        }
    }

    return $currentFilter;

}

function getFieldValueById($id, $columnName) : string
{
    return dbQueryGetResult("SELECT * FROM writer WHERE {$columnName} = $id");
}