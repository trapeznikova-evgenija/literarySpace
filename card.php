<?php
require_once('include/common.inc.php');

$writerId = $_GET['writerId'];

if ($writerId && writerExist($writerId)) {
    $data = getInfoAboutWriter($writerId);
    $writerPicture = getWriterPictures($writerId);
    $writerSignature = getWriterSignature($writerId);
    $mainWriterPicture = getMainWriterPicture($writerId);
    $allWriter = getAllWriter();

    echo getView('card.twig', array(
            'data' => $data,
            'writerPicture' => $writerPicture,
            'writerSignature' => $writerSignature,
            'mainWriterPicture' => $mainWriterPicture
        )
    );
} else {
    echo 'Not found';
}