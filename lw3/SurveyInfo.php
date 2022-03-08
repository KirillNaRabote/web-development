<?php
header("Content-Type: text/plain");
$email = $_GET["email"];
if (file_exists($email . '.txt'))
{
    readfile($email . '.txt');
}
else
{
    echo('А файла то и нет');
}