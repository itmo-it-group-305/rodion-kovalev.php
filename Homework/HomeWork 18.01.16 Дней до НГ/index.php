<?php
function days2NY()
{
    $todays_day = date('z');
    $thisyear = date('Y')%4==0 && date('Y')%100!==0? (int)"366" : (int)"365";
   return $days2NY= $thisyear - $todays_day;
}
echo 'дней до нового года: '. days2NY();