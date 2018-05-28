<?php
function getView($templateName, $array)
{
    $loader = new Twig_Loader_Filesystem(TEMPLATE_DIR);
    $twig = new Twig_Environment($loader);
    return $twig->render($templateName, $array);
}

function getWriterPictures($writerId)
{
    return dbQueryGetResult("SELECT writer.surname, writer_picture.filename
            FROM writer_picture
            LEFT JOIN writer ON writer_picture.id_writer = writer.id_writer
            WHERE writer.id_writer = {$writerId}
");
}

function writerExist($writerId)
{
    return dbQueryGetResult("SELECT * FROM writer WHERE id_writer = {$writerId}");
}

function getInfoAboutWriter($writerId)
{
    return dbQueryGetResult("SELECT * FROM writer WHERE id_writer = {$writerId}");
}

function getWriterSignature($writerId)
{
    return dbQueryGetResult("SELECT writer_signature.filename FROM writer_signature WHERE id_writer = {$writerId}");
}

function getMainWriterPicture($writerId)
{
    return dbQueryGetResult("SELECT main_writer_picture.filename FROM main_writer_picture WHERE id_writer = {$writerId}");
}

function getMonth($monthNumber): string
{
    $months = [
        '01' => 'января',
        '02' => 'февраля',
        '03' => 'марта',
        '04' => 'апреля',
        '05' => 'мая',
        '06' => 'июня',
        '07' => 'июля',
        '08' => 'августа',
        '09' => 'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря'
    ];
    return $months[$monthNumber] ?? '';
}

function getDateFromDb($column, $writerId)
{
    $date = dbQueryGetResult("SELECT {$column} FROM writer WHERE id_writer = {$writerId}");
    return $date;
}

function parseDate($data)
{
    $monthNumber = dbQueryGetResult("SELECT DATE_FORMAT('{$data}', '%m') as date_life");
    $monthNumber = getFirstElement($monthNumber);

    $year = dbQueryGetResult("SELECT DATE_FORMAT('{$data}','%Y') as date_life");
    $year = getFirstElement($year);

    $day = dbQueryGetResult("SELECT DATE_FORMAT('{$data}','%d') as date_life");
    $day = getFirstElement($day);

    $monthString = getMonth($monthNumber);

    return $day . ' ' . $monthString . ' ' . $year . ' г.';
}

function getYearsOfLife($writerId): string
{
    $dataOfBirth = getDateFromDb('date_of_birth', $writerId);
    $dataOfBirth = getFirstElement($dataOfBirth);


    $dataOfDeath = getDateFromDb('date_of_death', $writerId);
    $dataOfDeath = getFirstElement($dataOfDeath);


    $dataOfBirth = parseDate($dataOfBirth);
    $dataOfDeath = parseDate($dataOfDeath);

    return $dataOfBirth . ' - ' . $dataOfDeath;
}

function getFirstElement($array)
{
    $newArray = array_shift($array);
    $element = array_shift($newArray);
    return $element;
}

function getAllGenre()
{
    return dbQueryGetResult("SELECT * FROM genre");
}

function getAllCountry()
{
    return dbQueryGetResult("SELECT * FROM country");
}

function getAllWriter()
{
    return dbQueryGetResult("SELECT * FROM writer INNER JOIN main_writer_picture ON writer.id_writer = main_writer_picture.id_writer");
}

function getAllYear()
{
    return dbQueryGetResult("SELECT date_of_birth, date_of_death FROM writer");
}

function insertYearsInWriterTable($writerId, $yearsOfLifeArray)
{
    dbQuery("UPDATE writer SET years_of_life = '{$yearsOfLifeArray[$writerId]}' WHERE id_writer = {$writerId}");
}

function getAllMainWriterPicture()
{
    return dbQueryGetResult("SELECT * FROM main_writer_picture");
}

function getAllCentury()
{
    return dbQueryGetResult("SELECT * FROM century");
}

function getCountryName($idCountry) : string
{
    $resultArray =  dbQueryGetResult("SELECT DISTINCT country.name
                            FROM country
                            INNER JOIN writer ON country.id_country =  writer.id_country
                            WHERE country.id_country = {$idCountry}");
    if ($resultArray)
    {
        $countryName = getFirstElement($resultArray);
        return $countryName;
    }

    return '';
}

function getCenturyById($idCentury) : string
{
    $resultArray = dbQueryGetResult("SELECT DISTINCT century.name_century
                                           FROM century
                                           INNER JOIN writer ON century.id_century = writer.id_century
                                           WHERE century.id_century = {$idCentury}");

    if ($resultArray)
    {
        $centuryName = getFirstElement($resultArray);
        return $centuryName;
    }

    return '';
}

function getGenresName($authorGenresIdsArray)
{
    $genresString = '';

    foreach ($authorGenresIdsArray as $idGenre)
    {
        $genreNameArray = dbQueryGetResult("SELECT name_genre
                                                  FROM genre
                                                  WHERE id_genre = {$idGenre}");
        $genreName = getFirstElement($genreNameArray);
        $genresString .= $genreName . ' ';
    }

    return $genresString;
}

function getStringOfUserFilter()
{
    $idCountry = getRequestParameter('authorCountry');
    $idCentury = getRequestParameter('authorCentury');
    $authorGenresIdsArray = getRequestParameter("authorGenre");
    $authorGenresIdsArray = array_values($authorGenresIdsArray);

    $countryName = getCountryName($idCountry);
    $centuryName = getCenturyById($idCentury);
    $genresName = getGenresName($authorGenresIdsArray);

    $filterString = $genresName . $countryName . ' ' . $centuryName;

    return $filterString;
}