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


$calcBox = calcBox(2, 6, 2);
echo "The area of the box is: $calcBox[0] <br>";
echo "The volume of the box is: $calcBox[1] <br>";
?>
</body>
</html>