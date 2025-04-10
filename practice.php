<!-- 상품가격 (정수로 입력받음)
만약 10만원 이상 구매시 0.1퍼센트 할인
만약 5만원 이상 10만원 미만 구매시 0.05퍼 할인
5만원 미만 할인 없음
할인 금액은= 상품가격 * 할인금액
최종금액 = 상품가격 - 할인금액 -->


<?php

$price = 80000;

if($price >= 100000){
    $discount = 10;
    $discounting_price = $price * 0.1;
} elseif($price >= 50000){
    $discount = 5;
    $discounting_price = $price * 0.05;
} else{
    $discount = 0;
    $discounting_price = 0;
    echo"할인 적용 대상이 아닙니다";
}

$final_price = $price - $discounting_price;

echo "할인율 : {$discount}%\n";
echo "할인 금액: {$discounting_price}원\n";
echo "최종 결제 금액: {$final_price}원";

