<?php
$price = 1000;

function with_tax($base_price , $tax_rate = 0.1) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price,2);
    return $sum_price;
}


$price = with_tax($price );
echo $price ;