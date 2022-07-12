<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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

$minGes = 200;
$minToHourConv = minToHourConv($minGes);
echo  "$minGes minutes = $minToHourConv[0] hour(s) and $minToHourConv[1] minute(s).";
    ?>
</body>
</html>