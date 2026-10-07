<?php

function is_leap($year)
{
    $leap = ($year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0));

    if ($leap)
        return "Leap year";
    else if (!$leap)
        return "Not Leap year";
}

$year = (int) readline("Enter a year? ");

print (is_leap($year));

?>