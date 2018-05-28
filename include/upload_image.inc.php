<?php

function uploadImages($imagesDataArray)
{
    print_r($imagesDataArray);

    $upload_path = '/var/www/html/literarySpace/content/image/writer_images/';

    foreach ($imagesDataArray as $image) {
        $newFileName = time() . basename($image['tmp_name']);
        echo $newFileName . PHP_EOL;

        echo is_uploaded_file($image['tmp_name']) . PHP_EOL;

        if (move_uploaded_file($image['tmp_name'], $upload_path . $newFileName)) {
            echo 'Файл был перемещен' . PHP_EOL;
        } else {
            echo 'Файл не перемещен' . PHP_EOL;
        }
    }
}