<?php
$email = $_POST['email'];
if ($email !== '')
{
    $fileName = "data/" . strtolower($email) . ".txt";
    if (file_exists($fileName))
    {
        $content = file($fileName);
        foreach ($content as $value)
        {
          echo $value . "<br/>";
        }
    }
    else
    {
        echo 'Ошибка: файла не существует';
    }
}
else
{
    echo 'не введен Email';
}