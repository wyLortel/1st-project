<?php
var_dump($_POST);

$num = $_POST["num"];
$price = $_POST["price"];
$discount = $_POST["discount"];
$sum = $num * $price;
$sum -= $sum * $discount / 100;
echo"합계 : " , round($sum),"원";