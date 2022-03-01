<?php
header("Content-Type: text/plain");
$text = $_GET["text"];
function getGetParameter(string $text): ?string
{
    return isset($_GET[$text]) ? $_GET['$text'] : null;
}
getGetParameter($text);
$text = preg_replace('/\s+/', ' ', $text);
$text = trim($text, " ");
$length = strlen($text);
if ($length === 0)
{
    echo 'нет значения параметра';
} 
else{
    echo $text;
}