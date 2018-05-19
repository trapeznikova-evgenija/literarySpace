<?php
require_once 'include/common.inc.php';
header('Content-Type: text/html; charset=UTF-8');
dbInitialConnect();
//print_r(dbQueryGetResult('SELECT content FROM writer WHERE id_writer = 1'));

$writerId = $_GET['writerId'];

if ($writerId && writerExist($writerId)) {
    $data = getInfoAboutWriter($writerId);
    $writerPicture = getWriterPictures($writerId);
    $writerSignature = getWriterSignature($writerId);
    $mainWriterPicture = getMainWriterPicture($writerId);
//    $yearsOfLife = getYearsOfLife($writerId);
    $allWriter = getAllWriter();
    print_r($allWriter);

    echo getView('card.twig', array(
            'data' => $data,
            'writerPicture' => $writerPicture,
            'writerSignature' => $writerSignature,
            'mainWriterPicture' =>$mainWriterPicture
        )
    );

} else {
    echo 'Not found';
}