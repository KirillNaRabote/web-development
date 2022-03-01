<?php

header("Content-Type: text/plain");
$identifier = $_GET["identifier"];
$length = strlen($identifier);
$position = 0;
if ($length <> 0)
{
    if (is_numeric($identifier[$position]))
    {
        $result = 'no';
    } 
    else
    {
        if (ctype_alpha($identifier[$position]))
        {
            for ($position; $position < $length; $position++)
            {
                if (!ctype_alpha($identifier[$position]) and !is_numeric($identifier[$position]))
                {
                    $result = 'no';
                    break;
                }          
                else
                {
                    $result = 'yes';
                }
            }  
        }
        else
        {
            $result = 'no';
        }
    }
}    
else
{
    $result = 'no';
}
echo($result);