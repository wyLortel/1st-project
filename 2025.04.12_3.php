<?php

//상수사용법
const TAX_RATE = 0.1;
//두개 쓰면 에러 
// const TAX_RATE = 0.1;
function with_tax($base_price,$tax_rate= 0.1){
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
}

$price = with_tax(1000,0.08);
echo $price;

#defined 상수가 정의 되어잇는지 확인 
if (defined("tax_rate")){
    // conset TAX_RATE =0.1; 오류 conset은 IF문 안에서는 불가능 
    //아 참고로 conset함수내에서도 불가능
    define("tax_rate" , 0.1);
    // define(constant_name: "tax_rate" , 0.1); define 역시 두번은 불가능
}

// 전역함수가 실행됫나 확인하는법법
// if(funtion_exists("fn1")){
//     echo"fn1 is called";
// }