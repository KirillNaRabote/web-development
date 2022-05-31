<?php

$fileNames = scandir('data/');
$count = count($fileNames);
$quantity = $count - 2;

if ($count === 2) {
    $response[0] = 'Сохраненных пользователей нет';
} else {
    for ($i = 2; $i < $count; $i++) {
        $file = fopen('./data/' . $fileNames[$i], 'r');
        $content = file('./data/' . $fileNames[$i]);
        fclose($file);

        $cardValues['name'] = str_replace('Имя: ', '', $content[0]);
        $cardValues['name'] = str_replace("\r\n", '',  $cardValues['name']);

        $cardValues['email'] = str_replace('Email: ', '', $content[1]);
        $cardValues['email'] = str_replace("\r\n", '',  $cardValues['email']);

        if ($content[2] !== '' && $content[2] !== null) {
            $cardValues['profession'] = str_replace('Профессия: ', '', $content[2]);
            $cardValues['profession'] = str_replace("\r\n", '',  $cardValues['profession']);
        } else {
            $cardValues['profession'] = 'Профессии нет';
        }
        if ($content[3] !== '' && $content[3] !== null) {
            $cardValues['agree'] = str_replace('Согласие на рассылку', 'Согласен', $content[3]);
            $cardValues['agree'] = str_replace("\r\n", '',  $cardValues['agree']);
        } else {
            $cardValues['agree'] = 'Не согласен';
        }

        $response[$i] = $cardValues;
    }
    $response[0] = 'OK';
    $response[1] = $quantity;
}

echo (json_encode($response));