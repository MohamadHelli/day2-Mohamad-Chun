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
 
function celToFah(float $degrees)
{
    return $degrees * 1.8 + 32;
}
 
function fahToCel(float $degrees)
{
    return ($degrees - 32) / 1.8;
}
 
if (isset($_GET['cel'])) {
    $cel = floatval($_GET['cel']);
    $fah = celToFah($cel);
    $fahMsg = "$cel &deg;C = $fah &deg;F";
}
 
if (isset($_GET['fah'])) {
    $fah = floatval($_GET['fah']);
    $cel = fahToCel($fah);
    $celMsg = "$fah &deg;F = $cel &deg;C";
}
 
?>
 
 
<form>
    Celsius: <input type="number" name="cel">
    <input type="submit" value="Convert Celsius to Fahrenheit">
    <?php
    if (isset($fahMsg)) {
        echo $fahMsg;
    }
    ?>
</form>
<br>
<form>
    Fahrenheit: <input type="number" name="fah">
    <input type="submit" value="Convert Fahrenheit to Celsius">
    <?php
    if (isset($celMsg)) {
        echo $celMsg;
    }
    ?>
</body>
</html>