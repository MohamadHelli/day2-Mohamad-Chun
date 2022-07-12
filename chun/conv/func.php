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
        case $celsius < 11:
            $verb = "Cold";
        case $celsius < 16:
            $verb = "pleasant";
        case $celsius < 21:
            $verb = "warm";
        default:
            $verb = "hot";
            break;
    }
    return $verb;
}

if (isset($_POST['submit'])) {
    /*         if ($_POST["name"] || $_POST["age"]) {
            echo "Welcome " . $_POST['name'] . "<br />";
            echo "You are " . $_POST['age'] . " years old.";
        } */

    if ($_POST['fahrenheit']) {
        $c_val = ($_POST['fahrenheit'] - 32) * 5 / 9;
        $verb = setValue($c_val);

        echo "src = './img/$verb.png'";

        echo "<body>
                <h1>Celsius</h1>
                <div>
                    It is $c_val degrees and it is $verb. <br>
                    <img src='./img/$verb.jpg' alt='$verb'>
                </div>
            </body>";
    }
};