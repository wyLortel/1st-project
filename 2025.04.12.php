<?php

// $arry =[
//     "key" => 10,
// ];

// if (isset($arry["key"])) {
//     $arry['key'] *= 10 ;
// }else{
//     $arry['key'] = 1;
// }

// echo $arry["key"];

#위에 식을 간단히 쓰는게 삼항 연산자 

$arry =[
    "key" => 10,
];

$arry ["key"] = isset($arry["key"]) ? $arry["key"] * 10 : 1;
echo $arry["key"];