<?php
$age = 20;
$event_code = "e1";
$event_date = 3;


if($event_code == "e1") {
    if ($age >= 18){
        echo"예약이 완료 되엇습니다";
    }else{
        echo "나이제한으로 인해 예약이 불가능 합니다";
    }
}else if($event_code == "e2") {
    if ($event_date % 2 == 0){
        echo"예약이 완료 되엇습니다";
    }else{
        echo "선택하신 날짜에는 예약하실수 없습니다";
    }
}elseif($event_code =="e3"){
    if ($age >= 16){
        if($event_date % 7 ==0){
            echo"예약이 완료 되엇습니다";
        }else{
            echo "선택하신 날짜에는 예약하실수 없습니다다";
        }
    }else{
        echo "나이 제한으로 인해 예약이 불가능합니다 ";
    }
        
}else{
    echo "잘못된 입력입니다 프로그램을 종료합니다";
}