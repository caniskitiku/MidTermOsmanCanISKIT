<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile</title>
</head>
<body>
<?php require "Automobile.php"?>
<form action="out.php" method="post">
<input type="text" placeholder="Licence Plate" name="licence">
<input type="text" placeholder="Brand" name="brand">
<input type="text" placeholder="Model" name="model">
<input type="text" placeholder="Model Year" name="modelYear">
<input type="text" placeholder="Color" name="color">
<input type="submit" name ="Send">

</form>



</body>
</html>

