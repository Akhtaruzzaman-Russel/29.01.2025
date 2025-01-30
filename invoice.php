<?php

include("lib.php");

$_POST['price'];
$_POST['quantity'];


// $qty= 5;
// $price= 100;


$qty= $_POST['quantity'];
$price= $_POST['price'];

//or echo priceCal(10, 200) ;

priceCal($qty, $price);

$total_price = priceCal($qty, $price);

echo "The total price after discount is ". priceCal($qty, $price)."</br>";

echo "The total price  is ". $total_price ;



?>