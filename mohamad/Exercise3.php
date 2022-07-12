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
function grades($math,$physics,$english){
    $sum = $math + $physics + $english;
    return $sum;
}
$sum = grades(3, 4 ,5);
$avg = $sum / 3;
echo " that is your grades: $sum <br> and that is your Average: $avg";

?>

</body>
</html>