<?php
function day_name(){
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3 = "Wednesday";
    $day4 = "Thursday";
    return array($day1,$day2,$day3,$day4);
}
// $days = day_name();
// echo $days[0]."<br />";
// echo $days[1]."<br />";
// echo $days[2]."<br />";
// echo $days[3];

list($day_1,$day_2,$day_3,$day_4) = day_name();
echo $day_1."<br />";
echo $day_2."<br />";
echo $day_3."<br />";
echo $day_4."<br />";