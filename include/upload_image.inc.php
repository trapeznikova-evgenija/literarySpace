<?php

function uploadImages()
{
    $imagesDataArray = $_FILES;

    $upload_path = '/var/www/html/literarySpace/content/image/writer_images/';

    foreach ($imagesDataArray as &$image) {

        if(is_uploaded_file($image['tmp_name']))
        {
            $newFileName = time() . basename($image['tmp_name']);
//            echo $newFileName . PHP_EOL;
//            echo $image['tmp_name'];

            if (move_uploaded_file($image['tmp_name'], $upload_path . $newFileName)) {
                echo 'Файл был перемещен' . PHP_EOL;
            } else {
                echo 'Файл не перемещен' . PHP_EOL;
            }

            $image['tmp_name'] = $newFileName;
        }
    }
    return $imagesDataArray;
}