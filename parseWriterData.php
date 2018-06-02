<?php
require_once 'include/common.inc.php';
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();

$textDataArray = $_POST;

$imagesDataArray = uploadImages();
print_r($imagesDataArray);

$writerName = $textDataArray['writerName'];
$writerPatronymic = $textDataArray['writerPatronymic'];
$writerSurname = $textDataArray['writerSurname'];

$countryName = $textDataArray['writerCountry'];
$countryId = GetCountryId($countryName);
if (!$countryId)
{
    $countryId = AddNewCountry($countryName);
}
$countryId = getFirstElement($countryId);
echo "countryId {$countryId} " . PHP_EOL;

$century = $textDataArray['writerCentury'];
$centuryId = GetCenturyId($century);
if (!$centuryId)
{
   $centuryId = AddNewCentury($century);
}
$centuryId = getFirstElement($centuryId);

echo "centuryId  {$centuryId} " . PHP_EOL;

$genreString = $textDataArray['writerGenres'];
$genresArray = explode(",", $genreString);

$dateOfBirth = $textDataArray['dateOfBirth'];
$dateOfDeath = $textDataArray['dateOfDeath'];
$cardDescription = $textDataArray['cardDescription'];
$famousBook = $textDataArray['famousBook'];
$quote = $textDataArray['quote'];
$introductionContent = $textDataArray['introductionContent'];
$articleContent = $textDataArray['content'];

dbQuery("
               INSERT INTO writer(name, patronymic, surname, intoduction_content, content, card_description,
                                 quote, famous_book, date_of_birth, date_of_death, id_country, id_century)
               VALUES ('{$writerName}', '{$writerPatronymic}', '{$writerSurname}', '{$introductionContent}', '{$articleContent}', '{$cardDescription}', '{$quote}', '{$famousBook}', '{$dateOfBirth}', '{$dateOfDeath}',{$countryId}, {$centuryId});
                ");
echo "INSERT INTO writer(name, patronymic, surname, intoduction_content, content, card_description,
                                 quote, famous_book, date_of_birth, date_of_death, id_country, id_century)
               VALUES ('{$writerName}', '{$writerPatronymic}', '{$writerSurname}', '{$introductionContent}', '{$articleContent}', '{$cardDescription}', '{$quote}', '{$famousBook}', '{$dateOfBirth}', '{$dateOfDeath}',{$countryId}, {$centuryId});
                ";

$writerId = dbQueryGetResult("SELECT LAST_INSERT_ID()");
$writerId = getFirstElement($writerId);

foreach ($genresArray as $genreName)
{
    $genreId =  dbQueryGetResult("SELECT id_genre FROM genre WHERE name_genre = '{$genreName}'");
    if (!$genreId)
    {
       dbQuery("INSERT INTO genre(name_genre) VALUE ('{$genreName}')");
       $genreId = dbQueryGetResult("SELECT LAST_INSERT_ID()");
    }
    $genreId = getFirstElement($genreId);
//    echo '$genreId ' . $genreId . PHP_EOL;
    echo "INSERT INTO genre_writer(id_writer, id_genre) VALUE ({$writerId}, {$genreId})";
    dbQuery("INSERT INTO genre_writer(id_writer, id_genre) VALUE ({$writerId}, {$genreId})");
}


foreach ($imagesDataArray as $key => $value)
{
    $newFullName = $value['tmp_name'];
    echo $newFullName . PHP_EOL;

    echo $key;
    if ($key === 'mainWriterPhoto')
    {
        AddFileName('main_writer_picture', $newFullName, $writerId);
    } else if ($key === 'writerSignature')
    {
        AddFileName('writer_signature', $newFullName, $writerId);
    } else if (is_numeric($key)) //its gallery picture
    {
        AddFileName('writer_picture', $newFullName, $writerId);
    }
}



