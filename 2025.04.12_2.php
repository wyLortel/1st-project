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

// $arry =[
//     "key" => 10,
// ];

// $arry ["key"] = isset($arry["key"]) ? $arry["key"] * 10 : 1;
// echo $arry["key"];


#null연산자  현시점에서느 배열에 키에 10을 곱햇지만 값이 잇을때 아무것도 안한다 이때 사용

$arry =[
    "key" => 10,
];

if (isset($arry["key"])) {
    $arry['key'] *= 10 ;
}else{
    $arry['key'] = 1;
}
$arry ["key"] = isset($arry["key"]) ? $arry["key"] * 10 : 1;
//이게 null 연산자
$arry["key"] = $arry["key"] ?? 1;

echo $arry["key"];


