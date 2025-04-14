<?php

//2 음료 기본가격 결정
//3 크기별 추가 요금 계산
//4 기본 + 추가요금 계산
//5 멤버쉽이면 10퍼 할인 적용
//6 멤버쉽이면서 커피 라떼 + 라지사이즈면 무료 샷 제공 

// 출력
// 기본 가격 추가요금 할인 여부
// 최종 결제 금액
// 해당경우 무료샷 메세지지

$user_drink = "coffee";
$user_drink = strtolower($user_drink);

$user_drink_size = "large";
$user_drink_size = strtolower($user_drink_size);

$user_drink_membership .= "no";
$user_drink_membership = strtolower($user_drink_membership);

$total_price = 0;
$defalut_price = 0 ;
$add_size_price = 0;
$user_drink_membership_sale = 0;

if ($user_drink == "coffee") {
    $defalut_price = 3000;
}elseif ($user_drink == "latte") {
    $defalut_price = 4000;
}elseif ($user_drink == "juice") {
    $defalut_price = 3500;
}

$total_price += $defalut_price;


if ($user_drink_size == "large") {
    $add_price = 1000;
}elseif ($user_drink_size == "medium") {
    $add_price = 500;
}
$total_price += $add_price;

echo"기본 가격: {$defalut_price}원\n";
echo"크기 추가 가격: {$add_price}원\n";

if ($user_drink_membership == "yes") {
    $user_drink_membership_sale = $total_price * 0.1;
    $total_price -= $user_drink_membership_sale;
    echo"할인 적용 : - {$user_drink_membership_sale}원\n";
}elseif($user_drink_membership == "no"){
    echo"할인 적용 : 없음\n";
}

echo"최종 가격: {$total_price}원\n";

if ($user_drink_membership == "yes" && ($user_drink == "coffe" || $user_drink == "latte") && $user_drink_size == "large"){
    echo "무료 샷이 제공 됩니다";
}








