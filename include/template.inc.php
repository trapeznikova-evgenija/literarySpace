<?php
function getView($templateName, $array) {
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