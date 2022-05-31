<?php

$email = $_POST['email'];
$name = $_POST['name'];
$job = $_POST['job'];
$checkbox = $_POST['checkbox'];
if($email !== "" && $email !== null){
    echo 'OK';
    $fileName = 'data/' . strtolower($email) . '.txt';
    file_put_contents($fileName, 'Email: ' . $email . PHP_EOL);
    if($name !== "")
    {
        file_put_contents($fileName, 'Имя: ' . $name . PHP_EOL, FILE_APPEND);
    }
    if(isset($job))
    {
        file_put_contents($fileName, 'Деятельность: ' . $job . PHP_EOL, FILE_APPEND);
    }
    if($checkbox === 'on')
    {
        file_put_contents($fileName, 'Согласен получать информационные материалы о старте курса', FILE_APPEND);
    }
}
else{
    echo 'Не введена электронная почта';
}