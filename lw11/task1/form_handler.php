<?php

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$name = $data->name;
$profession = $data->job;
$checkbox = $data->checkbox;
$fileName = 'data/' . strtolower($email) . '.txt';

if (file_exists($fileName)) {
    $file = fopen($fileName, 'r');
    $fileData = file($fileName);
    fclose($file);
    $fileData[0] = 'Имя: ' . $name . PHP_EOL;
    $fileData[1] = 'Email: ' . $email . PHP_EOL;
    if ( ($fileData[2] !== '') && ($fileData !== null) && ($profession !== null) ) {
        $fileData[2] = 'Профессия: ' . $profession. PHP_EOL;
    }
    if ($checkbox === 'on') {
        $fileData[3] = 'Согласие на рассылку';
    }
    $file = fopen($fileName, 'w+');
    fwrite($file, $fileData[0]);
    fwrite($file, $fileData[1]);
    fwrite($file, $fileData[2]);
    fwrite($file, $fileData[3]);
    fclose($file);
} else {
    file_put_contents($fileName, 'Имя: ' . $name . PHP_EOL);
    file_put_contents($fileName, 'Email: ' . $email . PHP_EOL, FILE_APPEND);
    if ($profession !== null) {
        file_put_contents($fileName, 'Профессия: ' . $profession . PHP_EOL, FILE_APPEND);
    } else {
        file_put_contents($fileName, PHP_EOL, FILE_APPEND);
    }
    if ($checkbox === 'on') {
        file_put_contents($fileName, 'Согласие на рассылку', FILE_APPEND);
    }
}
//отправлять json