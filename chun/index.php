<?php

function printName($name, $surname)
{
    echo "Hello $name $surname!";
};

function divedeInt($num1, $num2)
{
    $div = $num1 / $num2;
    // echo $div;
    return $div;
};

function gradeCalc($math, $phys, $eng)
{
    $sum = $math + $phys + $eng;
    $avg = $sum / 3;
    $ret_arr = [$sum, $avg];
    return $ret_arr;
};


function calcBox($width, $height, $depth)
{
    $ret_arr = [$width * $height, $width * $height * $depth];
    return $ret_arr;
};

function minToHourConv($min)
{
    $hour = floor($min / 60);
    $minutes = $min % 60;
    return [$hour, $minutes];
};


echo "<h1>Exercise 1 </h1>";
printName("Harry", "Potter");


echo "<h1>Exercise 2</h1>";
echo divedeInt(20, 5);

echo "<h1>Exercise 3</h1>";
$gradeCalc = gradeCalc(1, 2, 1);
echo "SUM: $gradeCalc[0] <br>";
echo "AVG: $gradeCalc[1] <br>";

echo "<h1>Exercise 4</h1>";
$calcBox = calcBox(2, 6, 2);
echo "The area of the box is: $calcBox[0] <br>";
echo "The volume of the box is: $calcBox[1] <br>";

echo "<h1>Exercise 5</h1>";
$minGes = 300;
$minToHourConv = minToHourConv($minGes);
echo  "$minGes minutes = $minToHourConv[0] hour(s) and $minToHourConv[1] minute(s).";