<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>POST METHOD</p>
       <form method ="POST">
           Name: <input type="text"  name="name" />
           Age: <input type ="number" name="age" />
           <input  type="submit" name="submit"  />
       </form>
<?php

if( isset($_POST['submit']))
{
    if( $_POST["name"] || $_POST["age"] )
    {
        echo "Welcome ". $_POST[ 'name']. "<br />";
        echo "You are " . $_POST['age']. " years old.";
    }
}

?>
</body>
</html>