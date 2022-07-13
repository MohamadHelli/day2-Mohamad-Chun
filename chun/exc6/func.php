<?php

if ($_POST) {
    if (strlen($_POST['fname']) > 5) {
        $color = "green";
    } else {
        $color = "black";
    }
}

echo "<div style='color:  $color'> " . $_POST['fname'] . "</div>";
?>
<div><?= $_POST['lname'] ?></div>
<div><?= $_POST['age'] ?></div>