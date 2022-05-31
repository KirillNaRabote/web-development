<?php

$fileNames = scandir('data');
$count = count($fileNames);
echo ($count . "<br>");
echo ($fileNames[2]."<br>");

$file = fopen('data/timur99-00@mail.ru.txt', 'r+');
$content = file('data/timur99-00@mail.ru.txt');
echo ($content . "<br>");
echo ($content[0] . "<br>");
echo ($content[1] . "<br>");
echo ($content[2] . "<br>");
echo ($content[3] . "<br>");
fclose($file);