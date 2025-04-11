<?php
# 카트안에 내가 사고싶은 상품이 들어잇다
#만약 내가 사고싶은 상품의 갯수가 만족하면 감사합니다
#만족하지않으면 죄송합니다 {내가 사고싶은 상품은} {몇개}뿐입니다
#재고의 수는 위 프로덕트에서 참고
$products = [
    "table" => [1000 ,2],
    "chair" => [500,4],
    "bed" => [10000,1],
    "light" => [5000,1],
];

foreach ($products as $key => $value){
    $p_name = $key;
    $p_price = $value[0];
    $p_num = $value[1];
    echo"{$p_name}은 {$p_price}원이고 {$p_num}개 잇습니다\n";
}


$cart =[
    "table" => 1,
    "bed" => 2,
];

echo "-------상품구입-------\n";

foreach ( $cart as $key => $value) {
    $c_name = $key;
    $c_num = $value;

    echo"{$c_name}을 {$c_num}개 주세영\n";

    $p_num = $products[$c_name][1];
    if($c_num < $p_num) {
        echo "감사합니다";
    }else {
        $dic_num = (int)$c_num - $p_num;
        echo "죄송합니다 현재 갯수가 {$p_num}개 뿐입니다.\n";
        echo "{$dic_num}개가 부족합니다.\n";
    }
}