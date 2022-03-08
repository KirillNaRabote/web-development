<?php
$emailVal = $_GET["email"];
$firstNameVal = $_GET["first_name"];
$lastNameVal = $_GET["last_name"];
$ageVal = $_GET["age"];
$fileName = $emailVal . '.txt';
if ($emailVal !== null)
{
    if ($emailVal !== '')
    {
        if (file_exists($fileName))
        {
            $fileMode = fopen($fileName, 'r');
            $content = file($fileName);
            if ($firstNameVal !== null)
            {
                if ($firstNameVal !== '')
                {
                    $content[1] = 'First name: ' . $firstNameVal . "\n";
                }
            }
            if ($lastNameVal !== null)
            {
                if ($lastNameVal !== '')
                {
                    $content[2] = 'Last name: ' . $lastNameVal . "\n";    
                }
            }
            if ($ageVal !== null)
            {
                if ($ageVal !== '')
                {
                    $content[3] = 'Age: ' . $ageVal;
                }
            }
            $fileMode = fopen($fileName, 'w+');
            fwrite($fileMode, $content[0]);
            fwrite($fileMode, $content[1]);
            fwrite($fileMode, $content[2]);
            fwrite($fileMode, $content[3]);
            fclose($fileMode);
        }
        else
        {
            $fileMode = fopen($fileName, 'w');
            fwrite($fileMode, 'email: ' . $emailVal . "\n");
            if ($firstNameVal !== '')
            {
                fwrite($fileMode, 'First name: ' . $firstNameVal . "\n");
            }
            else
            {
                fwrite($fileMode, 'First name:' . "\n");
            }
            if ($lastNameVal !== '')
            {
                fwrite($fileMode, 'Last name: ' . $lastNameVal . "\n");    
            }
            else
            {
                fwrite($fileMode, 'Last name:' . "\n");
            }
            if ($ageVal !== '')
            {
                fwrite($fileMode, 'Age: ' . $ageVal . "\n");
            }
            else
            {
                fwrite($fileMode, 'Age:' . "\n");
            }
            fclose($fileMode);
        }
        
    }
    else
    {
        echo('Не введен email');    
    }
}
else
{
    echo('Не введен email');
}