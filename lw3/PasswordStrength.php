<?php
header("Content-Type: text/plain");
$countNum = 0;
$countUpCase = 0;
$countLowCase = 0;
$strength = 0;
$password = $_GET["password"];
$lengthPassword = strlen($password);
for ($i = 0; $i < $lengthPassword; $i++)
{
    if (is_numeric($password[$i]))
    {
        $countNum++;
    }
    if (ctype_lower($password[$i]))
    {
        $countLowCase++;
    }
    if (ctype_upper($password[$i]))
    {
        $countUpCase++;
    }
}
if ($lengthPassword <> 0)
{
    $strength = $lengthPassword * 4;
}
if ($countNum <> 0)
{
    $strength += $countNum * 4;
}
if ($countUpCase <> 0)
{
    $strength += ($lengthPassword - $countUpCase) * 2;
}
if ($countLowCase <> 0)
{
    $strength += ($lengthPassword - $countLowCase) * 2;
}
if (ctype_alpha($password))
{
    $strength -= $lengthPassword;
}
if (is_numeric($password))
{
    $strength -= $lengthPassword;
}
for ($i = 0; $i < $lengthPassword; $i++)
{
    $countSame = 1;
    $symFirst = $password[$i];
    for ($b = $i + 1; $b < $lengthPassword; $b++)
    {
        $symSecond = $password[$b];
        if (($symFirst === $symSecond) and ($symSecond != '?'))
        {
            $password = str_replace($password[$b], '?', $password, $countSame);
        }
    }
    if ($countSame > 1)
    {
    $strength -= $countSame;
    }
}
echo($strength);