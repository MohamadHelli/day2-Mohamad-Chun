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
function addFunction($num1, $num2)
{
    $dvd = $num1 / $num2;
    return  $dvd;
}
$return_value = addFunction(30, 2);
echo "The result is :  $return_value";

?>

</body>
</html>