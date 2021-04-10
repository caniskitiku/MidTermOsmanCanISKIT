<?php require "Automobile.php"?>
<?php if ($_POST!= NULL) {
 $auto = new Automobile($_POST["licence"],$_POST["brand"],$_POST["model"],$_POST["modelYear"],$_POST["color"]);
 echo $auto;}?>