<?php

function formatted_dump($content)
{
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
}

function setValue($celsius)
{
    switch ($celsius) {
        case $celsius < 6:
            $verb = "freezing";
            break;
        case $celsius < 10:
            $verb = "cold";
            break;
        case $celsius < 16:
            $verb = "pleasant";
            break;
        case $celsius < 21:
            $verb = "warm";
            break;
        default:
            $verb = "hot";
            break;
    }
    return $verb;
}

if ($_POST) {
    if ($_POST['fahrenheit']) {

        $c_val = floor(($_POST['fahrenheit'] - 32) * 5 / 9);
        $verb = setValue($c_val);

        formatted_dump($verb);

?>



<body>
    <h1>Celsius</h1>
    <div>
        It is <?= $c_val ?> degrees and it is <?= $verb ?>. <br>
        <img src='./img/<?= $verb . ".jpg" ?>' alt='<?= $verb ?>'>
    </div>
</body>
<?php
    }
};